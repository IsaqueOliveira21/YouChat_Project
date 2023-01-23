<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MensagemController extends Controller
{
    public function index(Request $request)
    {
        $destinatario = User::find($request->destinatario);
        $remetente = Auth::user()->id;
        $mensagens = DB::table('mensagens')
            ->whereIn('destinatario_id', array($destinatario->id, $remetente))
            ->whereIn('remetente_id', array($remetente, $destinatario->id))
            ->get();
        return view('app.chat', compact(['destinatario', 'remetente', 'mensagens']));
    }


    public function store(Request $request)
    {
        $mensagem = new Mensagem();
        $mensagem->remetente_id = Auth::user()->id;
        $mensagem->destinatario_id = $request->destinatario_id;
        $mensagem->mensagem = $request->mensagem;
        $mensagem->save();
        return redirect()->back();
    }
}
