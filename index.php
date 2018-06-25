<?php
/**
 * @param $nanikano_callback
 */
function event_trigger($nanikano_callback)
{
    var_dump("何かのイベントが始まりました");
    $引数 = "event_fooから来ました";
    $nanikano_callback($引数);
}

/**
 * 実行してみる
 */
event_trigger(
    //実際のイベント内容
  function($event_name){
      var_dump("実際のイベント内容です->".$event_name);
      if($event_name==="event_fooから来ました"){
          var_dump("この関数を外に定義することで共通化できたりしそう....");
      }
  }
);
