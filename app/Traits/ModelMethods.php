<?php

namespace App\Traits;

trait ModelMethods
{

    public function convertTimestampToDate()
    {
        if ($this->created_at->diffInSeconds(now()) == 0) {
            return 'now';
        } elseif ($this->created_at->diffInSeconds(now()) < 60) {
            return floor($this->created_at->diffInSeconds(now())) . ' seconds ago';
        } elseif ($this->created_at->diffInMinutes(now()) < 60) {
            return floor($this->created_at->diffInMinutes(now())) . ' Mins ago';
        } elseif ($this->created_at->diffInHours(now()) < 24) {
            return floor($this->created_at->diffInHours(now())) . ' Hours ago';
        } elseif ($this->created_at->diffInDays(now()) < 7) {
            return floor($this->created_at->diffInDays(now())) . ' Days ago';
        } elseif ($this->created_at->diffInDays < 30) {
            return floor($this->created_at->diffInWeeks(now())) . ' Weeks ago';
        } elseif ($this->created_at->diffInMonths(now()) < 12) {
            return floor($this->created_at->diffInMonths(now())) . ' Months ago';
        }
    }

}
