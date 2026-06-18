<?php

namespace Bcs\Backend;

use Contao\Backend;

class Reps extends Backend
{

	function getStates()
    {
        return array(
			'United States' => array(
				'alabama' => 'Alabama',
				'alaska' => 'Alaska',
				'arizona' => 'Arizona',
				'arkansas' => 'Arkansas',
				'california' => 'California',
				'colorado' => 'Colorado',
				'connecticut' => 'Connecticut',
				'delaware' => 'Delaware',
				'florida' => 'Florida',
				'georgia' => 'Georgia',
				'hawaii' => 'Hawaii',
				'idaho' => 'Idaho',
				'illinois' => 'Illinois',
				'indiana' => 'Indiana',
				'iowa' => 'Iowa',
				'kansas' => 'Kansas',
				'kentucky' => 'Kentucky',
				'louisiana' => 'Louisiana',
				'maine' => 'Maine',
				'maryland' => 'Maryland',
				'massachusetts' => 'Massachusetts',
				'michigan' => 'Michigan',
				'minnesota' => 'Minnesota',
				'mississippi' => 'Mississippi',
				'missouri' => 'Missouri',
				'montana' => 'Montana',
				'nebraska' => 'Nebraska',
				'nevada' => 'Nevada',
				'new_hampshire' => 'New Hampshire',
				'new_jersey' => 'New Jersey',
				'new_mexico' => 'New Mexico',
				'new_york' => 'New York',
				'north_carolina' => 'North Carolina',
				'north_dakota' => 'North Dakota',
				'ohio' => 'Ohio',
				'oklahoma' => 'Oklahoma',
				'oregon' => 'Oregon',
				'pennsylvania' => 'Pennsylvania',
				'rhode_island' => 'Rhode Island',
				'south_carolina' => 'South Carolina',
				'south_dakota' => 'South Dakota',
				'tennessee' => 'Tennessee',
				'texas' => 'Texas',
				'utah' => 'Utah',
				'vermont' => 'Vermont',
				'virginia' => 'Virginia',
				'washington' => 'Washington',
				'west_virginia' => 'West Virginia',
				'wisconsin' => 'Wisconsin',
				'wyoming' => 'Wyoming',
                'washington_dc' => 'Washington, D.C.',
				'puerto_rico' => 'Puerto Rico'),
			'Canada' => array(
				'alberta' => 'Alberta',
				'british_columbia' => 'British Columbia',
                'manitoba' => 'Manitoba',
				'new_brunswick' => 'New Brunswick',
                'newfoundland' => 'Newfoundland',
				'nova_scotia' => 'Nova Scotia',
                'ontario' => 'Ontario',
                'prince_edward_island' => 'Prince Edward Island',
				'quebec' => 'Quebec',
				'saskatchewan' => 'Saskatchewan'),
		);
	}

}
