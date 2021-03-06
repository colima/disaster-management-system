<?php

namespace App\Services;


interface VictimQueryBuilder
{
    public function groupBy($column);

    /**
     * @param array $array
     * @return DisasterEventQueryBuilder
     */
    public function select($array);

    /**
     * @return DisasterEventQueryBuilder
     */
    public function distinct();

    /**
     * @return int
     */
    public function count();

    /**
     * return result as SQL query
     * @return string
     */
    public function sql();

    /**
     * run the query and return as array
     * @return array
     */
    public function get();

    /**
     * run the query and return first element found
     * @return object
     */
    public function first();

    /**
     * @param int $id
     * @return VictimQueryBuilder
     */
    public function id($id);

    /**
     * join with victim locations
     * @return VictimQueryBuilder
     */
    public function joinWithVictimLocations();

    /**
     * @param $id
     * @return VictimQueryBuilder
     */
    public function disasterEvent($id);


    /**
     * @param string $column
     * @param string $ord
     * @return VictimQueryBuilder
     */
    public function orderBy($column,$ord = 'asc');
    /**
     * @param $type
     * @return VictimQueryBuilder
     */
    public function disasterType($type);

    /**
     * @param $start_date
     * @param $end_date
     * @return VictimQueryBuilder
     */
    public function periodDate($start_date,$end_date);

    /**
     * @param $date
     * @return VictimQueryBuilder
     */
    public function date($date);

    /**
     * @param $year
     * @param $month
     * @return VictimQueryBuilder
     */
    public function month($year,$month);

    /**
     * @param $year
     * @return VictimQueryBuilder
     */
    public function year($year);

    /**
     * @param $village_id
     * @return VictimQueryBuilder
     */
    public function villageId($village_id);

    /**
     * @param $subdistrict_name
     * @return VictimQueryBuilder
     */
    public function subdistrict($subdistrict_name);

    /**
     * @param $district_name
     * @return VictimQueryBuilder
     */
    public function district($district_name);

    /**
     * @param $province_name
     * @return VictimQueryBuilder
     */
    public function province($province_name);

    /**
     * @param $status
     * @return VictimQueryBuilder
     */
    public function status($status);

    public function statusYear($status, $year);
    public function statusMonth($status, $year, $month);
    public function statusDate($status, $year, $month, $day);

    public function statusPeriodDate($status,$date_start,$date_end);


    /**
     * @return VictimQueryBuilder
     */
    public function isMale();

    /**
     * @return VictimQueryBuilder
     */
    public function isFemale();

    /**
     * @param $group
     * @return VictimQueryBuilder
     */
    public function ageGroup($group);

    /**
     * @param string $medical_facility_name
     * @return VictimQueryBuilder
     */
    public function medicalFacility($medical_facility_name);

    /**
     * @param string $medical_facility_type
     * @return VictimQueryBuilder
     */
    public function medicalFacilityType($medical_facility_type);

    /**
     * @param string $refuge_camp_type
     * @return VictimQueryBuilder
     */
    public function refugeCampType($refuge_camp_type);
    /**
     * @param string $refuge_camp
     * @return VictimQueryBuilder
     */
    public function refugeCamp($refuge_camp);

    /**
     * return the bindings
     * @return array
     */
    public function bindings();
}