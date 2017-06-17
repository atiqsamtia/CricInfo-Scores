<?php
/**
 * Created by Atiq.
 * Prject: MessengerBot
 * Date: 6/18/2017
 * Time: 12:01 AM
 */

namespace Cricket;


class Score
{

    private $team1;
    private $team2;
    private $description;
    private $summary;
    private $status;

    /**
     * Score constructor.
     * @param $team1
     * @param $team2
     * @param $description
     * @param $summary
     * @param $status
     */
    public function __construct($team1, $team2, $description, $summary, $status)
    {
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->description = $description;
        $this->summary = $summary;
        $this->status = $status;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



}