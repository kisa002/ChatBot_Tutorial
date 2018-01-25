<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
 
    switch($content)
    {
        case "메뉴1":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴1을 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
 
        case "메뉴2":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴2를 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
 
        case "메뉴3":
            echo '
                {
                    "message":
                    {
                        "text": "메뉴3을 선택하셨습니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
 
        default:
            echo '
                {
                    "message":
                    {
                        "text": "잘못된 벨류입니다."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
                    }
                }';
            break;
    }
?>