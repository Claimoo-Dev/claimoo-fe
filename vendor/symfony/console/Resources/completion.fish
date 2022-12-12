# This file is part of the Symfony package.
#
# (c) Fabien Potencier <fabien@symfony.com>
#
# For the full copyright and license information, please view
# https://symfony.com/doc/current/contributing/code/license.html

function _sf_{{ COMMAND_NAME }}
    set sf_cmd (commandline -o)
    set c (count (commandline -oc))

<<<<<<< HEAD
    set completecmd "$sf_cmd[1]" "_complete" "--no-interaction" "-sfish" "-a{{ VERSION }}"
=======
<<<<<<< HEAD
    set completecmd "$sf_cmd[1]" "_complete" "--no-interaction" "-sfish" "-S{{ VERSION }}"
=======
    set completecmd "$sf_cmd[1]" "_complete" "--no-interaction" "-sfish" "-a{{ VERSION }}"
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

    for i in $sf_cmd
        if [ $i != "" ]
            set completecmd $completecmd "-i$i"
        end
    end

    set completecmd $completecmd "-c$c"

    set sfcomplete ($completecmd)

    for i in $sfcomplete
        echo $i
    end
end

complete -c '{{ COMMAND_NAME }}' -a '(_sf_{{ COMMAND_NAME }})' -f
