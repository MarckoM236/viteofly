<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvitationCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'template_id' => [
                'required',
                'integer'
            ],
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'slug' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            //json data
            'event' => ['required'],
            'date_event' => ['required'],
            'place_event' => ['nullable'],
            'address_event' => ['required'],
            'ubication_event' => ['required'],
            'celebrant' => ['required'],
            'message_hero' => ['nullable'],
            'message_footer' => ['nullable'],
        ];
    }

    /**
     * Optional: Custom error messages
     */
    public function messages(): array
    {
        return [
            'template_id.required' => 'The selected template is required.',
            'template_id.integer'    => 'The template is invalid.',

            'title.required' => 'The title is required.',
            'title.string' => 'The title must be text.',
            'title.min' => 'The title must be at least 3 characters long.',
            'title.max' => 'The title mustn´t be at least 255 characters long.',

            'slug.required' => 'The slug is required.',
            'slug.string' => 'The slug must be text.',
            'slug.min' => 'The slug must be at least 3 characters long.',
            'slug.max' => 'The slug mustn´t be at least 255 characters long.',

            'event.required' => 'The event is required.',
            'date_event.required' => 'The date event is required.',
            'address_event.required' => 'The address event is required.',
            'ubication_event.required' => 'The ubication event is required.',
            'celebrant.required' => 'The celebrant name is required.',

        ];
    }
}
