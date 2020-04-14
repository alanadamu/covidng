<?php

namespace App\Http\Controllers\Journal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Journal\AccountTypeCategory AS AccountTypeCategory;
use App\Models\Journal\AccountType AS AccountType;

use App\Http\Requests\Journal\AccountTypeCategoryRequest;

class AccountTypeCategoryController extends Controller
{

    public function __construct(Request $request)
    {
        $this->authorizeResource(AccountTypeCategory::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = AccountTypeCategory::with('account_type')->get();

        return view('journal.account_type_category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account_types = AccountType::get();
        
        return view('journal.account_type_category.create',['account_types' => $account_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountTypeCategoryRequest $request, AccountTypeCategory $category)
    {
        $category->create($request->all());

        return redirect()->route('journal_account_type_category.index')
                                                ->withStatus(__('Category successfully created.'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
