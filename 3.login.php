<?php #如果輸入帳號=joy 密碼=joyy589 會進入歡迎  如果錯誤則進入登入失敗
    if (($_GET[id] == "joy") && ($_GET[pwd]=="joyy589"))
        echo "歡迎";
    else
        echo "登入失敗";
?>