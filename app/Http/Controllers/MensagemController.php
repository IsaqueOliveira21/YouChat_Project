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
            //->whereIn('destinatario_id', array($destinatario->id, $remetente))
            //->whereIn('remetente_id', array($remetente, $destinatario->id))
            ->where(function ($query) use ($remetente, $destinatario) { // <-- ESTE MÉTODO É MAIS LOGICO QUE O COM WHERE IN
                $query->where('remetente_id', $remetente)
                    ->where('destinatario_id', $destinatario->id);
            })
            ->orWhere(function($query) use($remetente, $destinatario) {
                $query->where('remetente_id', $destinatario->id)
                    ->where('destinatario_id', $remetente);
            })
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
