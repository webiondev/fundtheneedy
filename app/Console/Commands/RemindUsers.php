<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\User;
class RemindUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind givers to donate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

              //$latest= User::where("type","seeker")->whereNull('deleted_at')->where('created_at', '<', now()->subDays(5))->get();
              $latest=User::where("type", "seeker")->whereNull('deleted_at')->whereRaw("DATEDIFF(NOW(), created_at) > ?", [7])->get(); // users created > 10 days ago
              $user = User::where("type","giver")->whereNull('deleted_at')->get();
              if(!$latest->isEmpty()){
              foreach($user as $user_)
              {
              //
              //

              Mail::send(['html'=>'email'], ['title' => 'Reminder to donate the needy!', 'content' => 'Dear donor, it is a gentle reminder for donations. New seekers have registered their appeal.'], function ($message) use($user_)
              {

                  $message->from('support@fundtheneedy.com', 'Fundtheneedy');
                  $message->subject('Reminder to Donate: Fundtheneedy!');
                  $message->to('sokhter@yahoo.com');

              });
             }
           }


    }
}
