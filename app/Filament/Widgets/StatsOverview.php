<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Inbox;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $total_and_new_users = User::selectRaw('COUNT(*) as total_users, SUM(CASE WHEN created_at BETWEEN ? AND ? THEN 1 ELSE 0 END) as new_users', [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfMonth(),
        ])->first();
        $total_users = $total_and_new_users->total_users ?? 0;
        $new_users   = $total_and_new_users->new_users ?? 0;

        $total_and_new_inboxes = Inbox::selectRaw('COUNT(*) as total_inboxes, SUM(CASE WHEN created_at BETWEEN ? AND ? THEN 1 ELSE 0 END) as new_inboxes', [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfMonth(),
        ])->first();
        $total_inboxes = $total_and_new_inboxes->total_inboxes ?? 0;
        $new_inboxes   = $total_and_new_inboxes->new_inboxes ?? 0;

        $stats[] = Stat::make('Total Users', $total_users)
            ->description($new_users . ' this month')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->extraAttributes(['class' => 'cursor-pointer'])
            ->url(route('filament.admin.resources.users.index'))
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('primary');

        $stats[] = Stat::make('Total Inboxes', $total_inboxes)
            ->description($new_inboxes . ' this month')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->extraAttributes(['class' => 'cursor-pointer'])
            ->url(route('filament.admin.resources.inboxes.index'))
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success');

        return $stats;
    }
}
