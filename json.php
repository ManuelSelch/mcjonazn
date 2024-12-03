<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

class Scrapper {
    private $imusican;
    private $client;

    function __construct() {
        $this->imusican = "https://music.imusician.pro";
        $this->client = new GuzzleHttp\Client();
    }

    function getImages(){
        $res = $this->client->request('GET', 'https://music.imusician.pro/artist/IrdowlMI2e/releases');
        $html = $res->getBody()->getContents();

        $crawler = new Crawler($html);
        $items = $crawler->filter('[data-test-id="ReleaseItem"]');

        $releaseItems = [];
        $items->each(function (Crawler $node, $i) use (&$releaseItems) {
            $title = $node->filter('[data-test-id="ReleaseItem-title"]')->text();
            $imageSrc = $node->filter('img')->attr('src');
            $category = $node->filter('span')->text();

            $releaseItems[] = [
                'title' => $title,
                'image_src' => $imageSrc,
                'category' => $category
            ];
        });

        return $releaseItems;
    }

   

    function loadReleases(){
        $url = "https://music.imusician.pro/_next/data/-fp7jJEKp62wgcmBLV0ZZ/en/artist/IrdowlMI2e.json?pid=IrdowlMI2e";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $releases = $data["pageProps"]["data"]["releases"];
        //$releaseItems = json_decode($json);
        $images = $this->getImages();

        $index = 0;
        $arr = [];
        foreach ($releases as $release) {
            // Check if the index exists in images array
            if (isset($images[$index])) {
                $img = $images[$index]["image_src"];
                //var_dump($releases[$key]);
                //$releases[$key]['image'] = $img;
                //$release['image'] = $img;

                $arr[] = [
                    'title' => $release["title"],
                    'key' => $release["pageKey"],
                    'image_src' => $img,
                    'category' => $release["releaseTypeId"]
                ];
            }
            $index += 1;
        }
        
        file_put_contents('releases/releases.json', json_encode($arr));

        return $arr;
    }

    function getReleases(){
        $json = file_get_contents('releases/releases.json');
        $arr = json_decode($json, true);
        return $arr;
    }

    function loadRelease($key){
        $url = "https://music-data.imusician.pro/a/".$key."/data.json";
        $json = file_get_contents($url);
        $details = json_decode($json, true);
        $services = $details["release"]["services"];
        $arr = [];
        
        foreach ($services as $service) {
            $arr[] = [
                "name" => $service["name"],
                "url" => $service["url"]
            ];
        }

        file_put_contents('releases/release_'.$key.'.json', json_encode($arr));

        return $arr;
    }

    function getRelease($key){
        $json = file_get_contents('releases/release_'.$key.'.json');
        $arr = json_decode($json, true);
        return $arr;
    }
}
?>
