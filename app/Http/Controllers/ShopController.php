<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function requestCar(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $brand = $request->brand;
        $type = $request->type;
        $seri = $request->seri;
        
        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:55777/v1/order/car-request', [
            'member_code' => $userCode,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'car_merk' => $brand,
            'car_type' => $type,
            'car_series' => $seri
        ]);

        $response = json_decode($backend->body());

        return response()->json($response);
    }

    public function searchProduct(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $year = $request->year;
        $brand = $request->brand;
        $type = $request->type;
        $seri = $request->seri;
        $price = (int) $request->price;
        $isCarAccessories = $request->is_car_accessories > 0 ? true : false;
        $accessories = $request->accessories;
        $totalPriceAaccessories = $request->total_price_accessories;
        $plate = $request->plate;

        Cookie::queue('plate', $plate);
        Cookie::queue('brand', $brand);
        Cookie::queue('type', $type);
        Cookie::queue('seri', $seri);
        Cookie::queue('total_price', $price + $totalPriceAaccessories);
        
        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:55777/v1/order/polis/step1', [
            'member_code' => $userCode,
            'year_production_car' => $year,
            'brand_car' => $brand,
            'car_type' => $type,
            'car_series' => $seri,
            'price_car' => $price,
            'is_car_accessories' => $isCarAccessories,
            'accessories' => $accessories,
            'area_plate' => $plate
        ]);

        $response = json_decode($backend->body());

        Cookie::queue('order_id', $response->data->order_polis_id);

        return response()->json($response);
    }

    public function setProductId(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $orderId = $request->order_id;
        $insuranceId = $request->insurance_id;
        $productId = $request->product_id;
        $insuranceName = $request->insurance_name;
        $productInsurance = $request->product_insurance;
        $premiPerYear = $request->premi_per_year;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:55777/v1/order/polis/step2/' . $orderId, [
            'insurance_id' => $insuranceId,
            'product_insurance_id' => $productId,
            'name_insurance' => $insuranceName,
            'product_insurance' => $productInsurance,
            'premi_per_year' => $premiPerYear
        ]);

        $response = json_decode($backend->body());

        return response()->json(true);
    }

    public function step2(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $orderId = $request->order_id;
        $insuranceId = $request->insurance_id;
        $productId = $request->product_id;
        $insuranceName = $request->insurance_name;
        $productInsurance = $request->product_insurance;
        $premiPerYear = $request->premi_per_year;

        Cookie::queue('premi_per_year', $premiPerYear);

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->put('http://staging.claimoo.com:55777/v1/order/polis/step2/' . $orderId, [
            'insurance_id' => (int) $insuranceId,
            'product_insurance_id' => (int) $productId,
            'name_insurance' => $insuranceName,
            'product_insurance' => $productInsurance,
            'premi_per_year' => (int) $premiPerYear
        ]);

        $response = json_decode($backend->body());

        return response()->json($response);
    }

    public function riskExpansion(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $orderId = $request->order_id;
        $isRiskExpansion = $request->is_risk_expansion;
        $totalPricePremi = $request->total_price_premi;
        $riskExpansion = $request->risk_expansion;

        Cookie::queue('total_premi', $totalPricePremi);

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->put('http://staging.claimoo.com:55777/v1/order/polis/risk-expansion/' . $orderId, [
            'is_risk_expansion' => $isRiskExpansion == 1 ? true : false,
            'total_price_premi' => (int) $totalPricePremi,
            'risk_expansion' => $riskExpansion
        ]);

        $response = json_decode($backend->body());

        return response()->json($response);
    }

    public function step3(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $orderId = Cookie::get('order_id');
        $totalPremi = Cookie::get('total_premi');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $idCardImage = $request->id_card_image;

        $filename = time() . '_' . $idCardImage->getClientOriginalName();

        $idCardImage->move(public_path('files') . '/', $filename);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:55777/v1/order/polis/step3', [
            'order_polis_id' => $orderId,
            'member_code' => $userCode,
            'id_card_image' => $filename,
            "fullname"=> $name,
            "phone"=> $phone,
            "email"=> $email,
            "policy_active_date"=> $date,
            "total_premi"=> (int) $totalPremi
        ]);

        $response = json_decode($backend->body());

        return response()->json($response);
    }

    public function step4(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $orderId = Cookie::get('order_id');
        $totalPremi = Cookie::get('total_premi');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $plate = $request->plate;
        $color = $request->color;
        $machine = $request->machine;
        $chassis = $request->chassis;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:55777/v1/order/polis/step4', [
            'order_polis_id' => $orderId,
            'member_code' => $userCode,
            'plat_number' => $plate,
            "colour"=> $color,
            "machine_number" => $machine,
            "chassis_number" => $chassis,
            "is_have_policy_active" => true,
            "previous_policy_photo" => "policy.jpg",
            "car_condition" => "new",
            "bastk_image" => "bastk.jph",
            "stnk_image" => "stnk.jpg",
            "vehicle_front_photo" => "vehicle.jpg",
            "vehicle_back_photo" => "vehicle.jpg",
            "vehicle_right_photo" => "vehicle.jpg",
            "vehicle_left_photo" => "vehicle.jpg",
            "vehicle_dashboard_transmission_stick_photo" => "vehicle.jpg",
            "vehicle_engine_photo" => "vehicle.jpg",
            "total_premi"=> (int) $totalPremi
        ]);

        $response = json_decode($backend->body());

        return response()->json($response);
    }

    public function forgetCookie()
    {
        Cookie::queue(
            Cookie::forget('plate')
        );

        Cookie::queue(
            Cookie::forget('brand')
        );

        Cookie::queue(
            Cookie::forget('type')
        );

        Cookie::queue(
            Cookie::forget('seri')
        );

        Cookie::queue(
            Cookie::forget('total_price')
        );

        Cookie::queue(
            Cookie::forget('order_id')
        );

        Cookie::queue(
            Cookie::forget('total_premi')
        );

        return response()->json(true);
    }
}
