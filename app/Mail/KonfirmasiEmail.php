<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KonfirmasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $_nama_status = [
        1 => 'diterima',
        2 => 'ditolak'
    ];

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data Data nama peserta dan statusnya
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = [
            'nama_peserta' => $data['nama_peserta'],
            'status'       => $this->_nama_status[$data['status']]
        ];
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Konfirmasi Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.konfirmasi',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
