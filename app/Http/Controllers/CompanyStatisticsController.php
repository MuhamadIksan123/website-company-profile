<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\CompanyStatistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyStatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = CompanyStatistics::orderByDesc('id')->paginate(10);
        return view('admin.statistics.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            CompanyStatistics::create($validated);
        });
        return redirect()->route('admin.statistics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyStatistics $companyStatistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyStatistics $statistic)
    {
        return view('admin.statistics.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticRequest $request, CompanyStatistics $statistic)
    {
        DB::transaction(function () use ($request, $statistic) {
            // Validasi data dari request
            $validated = $request->validated();

            // Proses file upload jika ada
            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            // Update model statistik dengan data validasi
            $statistic->update($validated);
        });

        return redirect()->route('admin.statistics.index')->with('success', 'Statistic updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyStatistics $statistic)
    {
        DB::transaction(function () use ($statistic) {
            $statistic->delete();
        });
        return redirect()->route('admin.statistics.index');
    }
}
