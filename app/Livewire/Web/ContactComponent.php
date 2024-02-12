<?php

namespace App\Livewire\Web;

use App\Models\Contact;
use App\Models\User;
use App\Services\FirebaseCloudMessagingService;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Livewire\Component;

class ContactComponent extends Component
{
    use LivewireAlert;
    public $nombre, $email, $asunto, $mensaje;
    public $title, $body, $fcm_token;
    private $messaging;

    public function render()
    {
        if (Auth::user()){
            $this->nombre = Auth::user()->name;
            $this->email = Auth::user()->email;
        }
        return view('livewire.web.contact-component');
    }

    public function limpiar()
    {
        if (Auth::user()){
            $this->nombre = Auth::user()->name;
            $this->email = Auth::user()->email;
        }else{
            $this->nombre = null;
            $this->email = null;
        }
        $this->asunto = null;
        $this->mensaje = null;
    }

    public function sendMessage()
    {

        $contact = new Contact();
        $contact->nombre = $this->nombre;
        $contact->email = strtolower($this->email);
        $contact->asunto = $this->asunto;
        $contact->mensaje = $this->mensaje;
        $contact->save();

        $users = User::where('role', '>', 0)->where('fcm_token', '!=', null)->get();

        if ($users->isNotEmpty()){
            try {

                $this->messaging = FirebaseCloudMessagingService::connect();
                $this->title = "Contacto: ".$this->email;
                $this->body = $this->asunto;
                foreach ($users as $user){

                    $this->fcm_token = $user->fcm_token;
                    $notificacion = Notification::fromArray([
                        'title'     =>  $this->title,
                        'body'   =>  $this->body
                    ]);
                    $message = CloudMessage::withTarget('token', $this->fcm_token)
                        ->withNotification($notificacion);
                    $this->messaging->send($message);
                }

            } catch (MessagingException|FirebaseException $e) {
                //mensaje en caso de error
            }
        }

        $this->limpiar();
        $this->alert('success', 'Mensaje Enviado.');
        $this->redirect('#');
    }

}
