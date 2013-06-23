
 <?php
      set_time_limit(0)
      include_once("simple_html_dom.php");

      $url = "http://www.interviewstreet.com";

     $html = file_get_html($url);

      foreach($html->find("a") as $link) {
        echo $link->href."<br/>";
      }

 ?>