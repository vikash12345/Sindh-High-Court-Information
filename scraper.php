<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
$MAX_ID = 3; //set based on required maximum numbers
/** looping over list of ids of doctors **/
for($id = 1; $i <= $MAX_ID; $id++)
{
  // // Read in a MCI doctor page
    $html = scraperwiki::scrape("http://202.61.43.53/cfms-hc-search/cases/search-result?CasesSearch%5BCASENAMECODE%5D=&CasesSearch%5BCASENO%5D=&CasesSearch%5BCASEYEAR%5D=&CasesSearch%5BCIRCUITCODE%5D=1&CasesSearch%5BPARTY%5D=&CasesSearch%5BMATTERCODE%5D=&CasesSearch%5BGOVT_AGENCY_CODE%5D=&CasesSearch%5BFIRNO%5D=&CasesSearch%5BFIRYEAR%5D=&CasesSearch%5BPOLICESTATIONCODE%5D=&CasesSearch%5BisPending%5D=3&page=".$id);
    
 $dom = new simple_html_dom();
 $dom->load($html);
 print_r($dom);
}
