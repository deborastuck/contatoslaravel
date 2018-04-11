<?php
namespace Agenda\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

interface IValidarRequest{
    public function authorize();
    public function rules();
}
