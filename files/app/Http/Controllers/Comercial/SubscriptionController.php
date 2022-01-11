<?php

namespace App\Http\Controllers\Comercial;

use App\Http\Controllers\Controller;
use App\Models\iPag\Subscription;
use App\Models\Plan;
use App\Services\iPag\PlanService;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    private $subscription, $plan;

    public function __construct(Subscription $subscription, Plan $plan)
    {
        $this->subscription = $subscription;
        $this->plan = $plan;

        $this->middleware('can:listar_assinaturas', ['only' => ['index']]);
        $this->middleware('can:criar_assinatura', ['only' => ['create', 'store']]);
    }

    public function index()
    {
        $subscriptions = $this->subscription->where('seller_id', '=', auth()->user()->id)->get();
        if (count($subscriptions) === 0) {
            return view('dashboard.comercial.assinaturas.start');
        }

        return view('dashboard.comercial.assinaturas.index', compact('subscriptions'));
    }

    public function create()
    {
        $plans = $this->plan->all();
        return view('dashboard.comercial.assinaturas.create', compact('plans'));
    }

    public function store(Request $request)
    {
        dd($request);
    }


}
