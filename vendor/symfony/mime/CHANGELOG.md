CHANGELOG
=========

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
6.2
---

 * Add `File`
 * Deprecate `Email::attachPart()`, use `addPart()` instead
 * Deprecate calling `Message::setBody()` without arguments

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
6.1
---

 * Add `DataPart::getFilename()` and `DataPart::getContentType()`

6.0
---

 * Remove `Address::fromString()`, use `Address::create()` instead
 * Remove `Serializable` interface from `RawMessage`

5.2.0
-----

 * Add support for DKIM
 * Deprecated `Address::fromString()`, use `Address::create()` instead

4.4.0
-----

 * [BC BREAK] Removed `NamedAddress` (`Address` now supports a name)
 * Added PHPUnit constraints
 * Added `AbstractPart::asDebugString()`
 * Added `Address::fromString()`

4.3.3
-----

 * [BC BREAK] Renamed method `Headers::getAll()` to `Headers::all()`.

4.3.0
-----

 * Introduced the component as experimental
