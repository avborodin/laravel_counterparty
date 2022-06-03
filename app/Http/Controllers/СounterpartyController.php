<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Counterparty;
use App\Models\Bank;
use Response;

class СounterpartyController extends Controller
{
    public function index()
    {
        $counterparties = DB::table('counterparties')
            ->leftJoin('banks', 'counterparties.id', '=', 'banks.counterparty_id')
            ->get();

        return view('counterparty.index', compact('counterparties'));
    }

    public function form(Request $request)
    {
        $counterparty = new Counterparty;
        $bank = new Bank;
        if($request->id){
            $counterparty = Counterparty::find($request->id);
            $bank = Bank::where('banks.counterparty_id', '=', $request->id)->get()->first();
        }
        return view('counterparty.form', compact('counterparty', 'bank'));
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'group_id'              => 'required',
            'name'                  => 'required',
            'opf_id'                => 'required',
            'short_name'            => 'required',
            'full_name'             => 'required',
            'inn'                   => 'required',
            'kpp'                   => 'required',
            'code_okpo'             => 'required',
            'bik'                   => 'required',
            'bank_name'             => 'required',
            'correspondent_account' => 'required',
            'checking_account'      => 'required',
            'account_type'          => 'required',
            'current_id'            => 'required',
        ]);

        if ($valid->passes()) {
            $dataCounterparty = [
                '1c_id'     => '0',
                'group_id'  => $request->group_id,
                'name'      => $request->name,
                'opf_id'    => $request->opf_id,
                'short_name'=> $request->short_name,
                'full_name' => $request->full_name,
                'inn'       => $request->inn,
                'kpp'       => $request->kpp,
                'code_okpo' => $request->code_okpo,
                'is_security_document' => $request->is_security_document?1:0,
                'is_physical_face' => $request->is_physical_face?1:0,
                'is_non_resident' => $request->is_non_resident?1:0,
                'is_supplier'=> $request->is_supplier?1:0,
                'is_buyer'=> $request->is_buyer?1:0,
                'user_id'   => Auth::id(),
            ];

            $dataBank = [
                'bank_name'         => $request->bank_name,
                'bik'               => $request->bik,
                'correspondent_account' => $request->correspondent_account,
                'checking_account'  => $request->checking_account,
                'account_type'      => $request->account_type,
                'current_id'        => $request->current_id,
            ];

            if($request->id){
                $counterparty = Counterparty::find($request->id);
                $counterparty->update($dataCounterparty);

                $bank = Bank::find($request->bank_id);
                $dataBank['counterparty_id'] = $counterparty->id;
                $bank->update($dataBank);

            }else{
                $counterparty = Counterparty::create($dataCounterparty);
                $dataBank['counterparty_id'] = $counterparty->id;
                Bank::create($dataBank);
            }
            return Response::json(['success' => '1']);
        }
        return Response::json(['errors' => $valid->errors()]);
    }

    public function destroy(Request $request){

        Counterparty::destroy($request->id);
    }
}
