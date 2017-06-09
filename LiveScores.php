<?php
/**
 * Created by Atiq.
 */

namespace Cricket;

class LiveScores
{
    private $BASE_URL = "http://www.espncricinfo.com/ci/engine/match/";
    private $LIVE_SCORE_URL = "http://static.espncricinfo.com/rss/livescores.xml";
    private $ALLOWED_TEAMS = array("pakistan", "india", "south africa", "australia", "england", "bangladesh", "new zealand", "sri lanka", "west indies", "ireland", "zimbabwe", "kenya", "afghanistan", "karachi kings", "quetta gladiators", "islamabad united", "peshawar zalmi", "lahore qalandars");

    public function getScore($match){

        $url = $this->BASE_URL . $match . ".json";

        $json = json_decode($this->getURL($url));

        $result = array();

        $result["description"] = $json->description;
        $result["status"] = $json->live->status;
        $result["summary"] = $json->match->current_summary;
        $result["team1_name"] = $json->match->team1_name;
        $result["team2_name"] = $json->match->team2_name;

        return $result;

    }


    public function liveMatchesList(){

        $string = $this->getURL($this->LIVE_SCORE_URL);
        $xml = simplexml_load_string($string);

        $total = count($xml->channel->item);
        $matches = array();
        for ($i = 0; $i < $total; $i++) {
            // Get Match ID from url
            $mid = explode(".",explode("/", $xml->channel->item[$i]->guid)[6])[0];

            //Clean matches snd teams
            $temp = preg_replace("/[^a-zA-Z\ ]+/", "", $xml->channel->item[$i]->title);
            $teams = preg_replace('/\s+/', ' ', $temp);

            // Teams
            $teams = explode(" v ", $teams);
            // If Team is allowed.
            if (in_array(strtolower($teams[0]), $this->ALLOWED_TEAMS) or in_array(strtolower($teams[1]), $this->ALLOWED_TEAMS)) {

                $match = array(
                    "team1_name" => $teams[0],
                    "team2_name" => $teams[1],
                    "mid" => $mid
                );

                $matches[] = $match;

            }

        }

        return $matches;

    }


    private function getURL($url){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_USERAGENT => 'CricInfo LiveScores Bot'
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
}

}