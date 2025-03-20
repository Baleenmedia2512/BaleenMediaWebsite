<?php
$databases = [
    [
        'host' => 'localhost',
        'name' => 'baleeed5_gracescans',
        'user' => 'baleeed5_gracescans',
        'pass' => 'Grace@123#',
    ],
    [
        'host' => 'localhost',
        'name' => 'baleeed5_live',
        'user' => 'baleeed5_web_adm',
        'pass' => 'Baleen@789#',
    ],
    [
        'host' => 'localhost',
        'name' => 'baleeed5_wellness',
        'user' => 'baleeed5_wellness',
        'pass' => 'Wellness@123#',
    ],
];

$backup_dir = __DIR__ . '/WeeklyBackup';

if (!is_dir($backup_dir)) {
    mkdir($backup_dir, 0755, true);
}

// Get the current day of the week (e.g., "Monday")
$day_of_week = date('l');

foreach ($databases as $db) {
    // Create a backup filename with the format dbname_day
    $backup_file = $backup_dir . '/backup_' . $db['name'] . '_' . $day_of_week . '.sql';

    // Execute the mysqldump command
    $command = "mysqldump --host={$db['host']} --user={$db['user']} --password={$db['pass']} {$db['name']} > $backup_file";
    system($command);
}
?>