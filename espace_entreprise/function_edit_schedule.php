<?php
function editSchedule($id)
{
include 'config/env.php';
    $current = 'false';

    try {
        $requiredFields = array(
            'name',
            'monday_mor_start',
            'monday_mor_end',
            'monday_eve_start',
            'monday_eve_end',
            'tuesday_mor_start',
            'tuesday_mor_end',
            'tuesday_eve_start',
            'tuesday_eve_end',
            'wednesday_mor_start',
            'wednesday_mor_end',
            'wednesday_eve_start',
            'wednesday_eve_end',
            'thursday_mor_start',
            'thursday_mor_end',
            'thursday_eve_start',
            'thursday_eve_end',
            'friday_mor_start',
            'friday_mor_end',
            'friday_eve_start',
            'friday_eve_end',
            'saturday_mor_start',
            'saturday_mor_end',
            'saturday_eve_start',
            'saturday_eve_end',
            'sunday_mor_start',
            'sunday_mor_end',
            'sunday_eve_start',
            'sunday_eve_end'
        );

        foreach ($requiredFields as $field) {
            if (!isset($_POST[$field]) || empty($_POST[$field])) {
                $message = "<script> Alert.alert_info('Missing required fields'); </script>";
                return $message;
            }
        }

        $sth = $dbco->prepare("UPDATE `schedules` SET `name` = ?, `monday_mor_start` = ?, `monday_mor_end` = ?, `monday_eve_start` = ?, `monday_eve_end` = ?, `tuesday_mor_start` = ?, `tuesday_mor_end` = ?, `tuesday_eve_start` = ?, `tuesday_eve_end` = ?, `wednesday_mor_start` = ?, `wednesday_mor_end` = ?, `wednesday_eve_start` = ?, `wednesday_eve_end` = ?, `thursday_mor_start` = ?, `thursday_mor_end` = ?, `thursday_eve_start` = ?, `thursday_eve_end` = ?, `friday_mor_start` = ?, `friday_mor_end` = ?, `friday_eve_start` = ?, `friday_eve_end` = ?, `saturday_mor_start` = ?, `saturday_mor_end` = ?, `saturday_eve_start` = ?, `saturday_eve_end` = ?, `sunday_mor_start` = ?, `sunday_mor_end` = ?, `sunday_eve_start` = ?, `sunday_eve_end` = ? WHERE `id` = ?");

        $sth->bindParam(1, $_POST['name']);
        $sth->bindParam(2, $_POST['monday_mor_start']);
        $sth->bindParam(3, $_POST['monday_mor_end']);
        $sth->bindParam(4, $_POST['monday_eve_start']);
        $sth->bindParam(5, $_POST['monday_eve_end']);
        $sth->bindParam(6, $_POST['tuesday_mor_start']);
        $sth->bindParam(7, $_POST['tuesday_mor_end']);
        $sth->bindParam(8, $_POST['tuesday_eve_start']);
        $sth->bindParam(9, $_POST['tuesday_eve_end']);
        $sth->bindParam(10, $_POST['wednesday_mor_start']);
        $sth->bindParam(11, $_POST['wednesday_mor_end']);
        $sth->bindParam(12, $_POST['wednesday_eve_start']);
        $sth->bindParam(13, $_POST['wednesday_eve_end']);
        $sth->bindParam(14, $_POST['thursday_mor_start']);
        $sth->bindParam(15, $_POST['thursday_mor_end']);
        $sth->bindParam(16, $_POST['thursday_eve_start']);
        $sth->bindParam(17, $_POST['thursday_eve_end']);
        $sth->bindParam(18, $_POST['friday_mor_start']);
        $sth->bindParam(19, $_POST['friday_mor_end']);
        $sth->bindParam(20, $_POST['friday_eve_start']);
        $sth->bindParam(21, $_POST['friday_eve_end']);
        $sth->bindParam(22, $_POST['saturday_mor_start']);
        $sth->bindParam(23, $_POST['saturday_mor_end']);
        $sth->bindParam(24, $_POST['saturday_eve_start']);
        $sth->bindParam(25, $_POST['saturday_eve_end']);
        $sth->bindParam(26, $_POST['sunday_mor_start']);
        $sth->bindParam(27, $_POST['sunday_mor_end']);
        $sth->bindParam(28, $_POST['sunday_eve_start']);
        $sth->bindParam(29, $_POST['sunday_eve_end']);
        $sth->bindParam(30, $id);

        $sth->execute();

        $message = "<script> Alert.alert_info('Horaires mises à jour'); </script>";
    } catch (PDOException $e) {
        $message = "Erreur : " . $e->getMessage();
    }

    return $message;
}