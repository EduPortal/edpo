<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostCreated extends Notification
{
    use Queueable;

    protected $teacher , $class , $student , $post , $attachments;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($teacher , $class , $student , $post , $attachments)
    {
        $this->teacher = $teacher;
        $this->class = $class;
        $this->student = $student;
        $this->post = $post;
        $this->attachments = $attachments;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        $PostCreatedObject = [
            'teacher' => $this->teacher,
            'class' => $this->class,
            'student' => $this->student,
            'post' => $this->post,
            'attachments' => $this->attachments,
        ];

        // event(new ActivateRestaurantEvent($ActivateRestaurantRequest));

        return $PostCreatedObject;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
