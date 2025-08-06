<?php

namespace App\Traits;

trait ModelMethods
{

    public function convertTimestampToDate()
    {
        if ($this->created_at->diffInSeconds(now()) == 0) {
            return 'now';
        } elseif ($this->created_at->diffInSeconds(now()) < 60) {
            return floor($this->created_at->diffInSeconds(now())) . __('messages.seconds');
        } elseif ($this->created_at->diffInMinutes(now()) < 60) {
            return floor($this->created_at->diffInMinutes(now())) . __('messages.mins');
        } elseif ($this->created_at->diffInHours(now()) < 24) {
            return floor($this->created_at->diffInHours(now())) . __('messages.hours');
        } elseif ($this->created_at->diffInDays(now()) < 7) {
            return floor($this->created_at->diffInDays(now())) . __('messages.days');
        } elseif ($this->created_at->diffInDays < 30) {
            return floor($this->created_at->diffInWeeks(now())) . __('messages.weeks');
        } elseif ($this->created_at->diffInMonths(now()) < 12) {
            return floor($this->created_at->diffInMonths(now())) . __('messages.months');
        } else {
            return floor($this->created_at->diffInYears(now())) . __('messages.years');
        }
    }

}
