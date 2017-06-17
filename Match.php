<?php
/**
 * Created by Atiq.
 * Prject: MessengerBot
 * Date: 6/18/2017
 * Time: 12:00 AM
 */

namespace Cricket;


class Match
{

    private $team1;
    private $team2;
    private $mid;

    private $score;

    /**
     * Match constructor.
     * @param $team1
     * @param $team2
     * @param $mid
     * @param $score
     */
    public function __construct($team1, $team2, $mid, Score $score = null)
    {
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->mid = $mid;
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * @param mixed $team1
     */
    public function setTeam1($team1)
    {
        $this->team1 = $team1;
    }

    /**
     * @return mixed
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * @param mixed $team2
     */
    public function setTeam2($team2)
    {
        $this->team2 = $team2;
    }

    /**
     * @return mixed
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * @param mixed $mid
     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    }

    /**
     * @return Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param Score $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }



}