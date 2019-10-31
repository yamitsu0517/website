<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>日付計算</title>
    </head>
    <body>
        <div id="contents">
            <div id="main">
                <div id="title">
                    <h3>日付計算</h3>
                </div>
                <div id="main_left">
                    <div id="explane">
                        <p>日付を入れてください。入れることで、何日間空いているのか計算します。</p>
                    </div>
                    <div id="math1" name="math1">
                        <div id="start_date" name="start_date">
                            <p>開始日時：<input type="date" id="calender1" name="calender1"></p>
                        </div>
                        <div id="end_date" name="end_date">
                            <p>終了日時：<input type="date" id="calender2" name="calender2"></p>
                        </div>
                        <div id="button">
                            <a href="javascript:void(0)" onClick="math1_button()">計算する</a>
                        </div>
                        <div id="result1"></div>
                    </div>
                </div>
                <div id="main_right">
                    <div id="explane">
                        <p>数字を入力してください。入力した、日付後を表示します。</p>
                    </div>
                    <div id="math2" name="math2">
                        <input type="number" id="number" name="number"><a href="jacascript:void(0)"
                            onClick="math2_button()">日後は？</a>
                    </div>
                    <div id ="result2"></div>
                </div>
            </div>

        </div>
    </body>
        </html>
