<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function getFirstName($first_name){
    	return ucwords($this->first_name);
    }
    public function setFirstName($first_name){
    	$this->attributes['first_name'] = ucwords($first_name);
    }

    public function getLastName($last_name){
    	return ucwords($last_name);
    }
    public function setLastName($last_name){
    	$this->attributes['last_name'] = ucwords($last_name);
    }

    public function getCompanyName($company_name){
    	return ucwords($company_name);
    }
    public function setCompanyName($company_name){
    	$this->attributes['company_name'] = ucwords($company_name);
    }

    public function getEventSpace($event_space){
    	return ucwords($this->event_space);
    }
    public function setEventSpace($event_space){
    	$this->attributes['event_space'] = ucwords($event_space);
    }

    public function getEventName($event_name){
    	return ucwords($this->event_name);
    }
    public function setEventName($event_name){
    	$this->attributes['event_name'] = ucwords($event_name);
    }

    public function getEventType($event_type){
    	return ucwords($event_type);
    }
    public function setEventType($event_type){
    	$this->attributes['event_type'] = ucwords($event_type);
    }

    public function getInternetFacility($internet_facility){
    	return ucwords($internet_facility);
    }
    public function setInternetFacility($internet_facility){
    	$this->attributes['internet_facility'] = ucwords($internet_facility);
    }

    public function getVideoCoverage($video_coverage){
    	return ucwords($video_coverage);
    }
    public function setVideoCoverage($video_coverage){
    	$this->attributes['video_coverage'] = ucwords($video_coverage);
    }

    public function getCatering($catering){
    	return ucwords($catering);
    }
    public function setCatering($catering){
    	$this->attributes['catering'] = ucwords($catering);
    }

    public function getOtherServices($other_services){
    	return ucwords($other_services);
    }
    public function setOtherServices($other_services){
    	$this->attributes['other_services'] = ucwords($other_services);
    }

}
