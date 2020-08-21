<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Appointement;

class AppointementController extends Controller
{
    public function index()
    {
        $appointements = [];
        $data = Appointement::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $appointement[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($appointements);
        return view('fullcalender', compact('calendar'));
    }
}





