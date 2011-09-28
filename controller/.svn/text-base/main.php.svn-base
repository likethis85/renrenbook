<?php
class main extends spController
{
	function index(){
		$this->display("default/auth/invite.html");
		//$this->jump(spUrl("invite","go_to_renren"));
                //echo '<p>Running On <a href="http://sae.sina.com.cn" target="_blank"><img src="http://sae.sina.com.cn/static/image/poweredby/117X12px.gif" title="Powered by Sina App Engine" /></a></p>';
	}
	function p()
	{
		$html =
		  '<html><body>'.
		  '<p>Put your html here, or generate it with your favourite '.
		  'templating system.</p>'.
		  '</body></html>';
		
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("sample.pdf");
	}
	function about()
	{
		$this->display("default/main/about.html");
	}
	function _a()
	{
		dump($_SESSION["CodeNum"]);
	}
}
