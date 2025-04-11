<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Usermanagement\App\Models\Member;
use Modules\Usermanagement\App\Models\EdCode;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $list=array(
    0 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '1989088255', 'IDNum' => '9692528', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '22000', 'Name' => 'Mr KOTI Cosmus Nguthi', 'Remarks' => 'sShare'),
    1 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '1989088255', 'IDNum' => '9692528', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr KOTI Cosmus Nguthi', 'Remarks' => 'sRisk'),
    2 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2003012959', 'IDNum' => '22054314', 'AgentType' => '14', 'RegNum' => '83172', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0069', 'EDCode' => '938', 'Amount' => '2139.47', 'Balance' => '68463.12', 'Name' => 'Mr JOHN Syengo Muthui', 'Remarks' => 'sLoan'),
    3 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2003012959', 'IDNum' => '22054314', 'AgentType' => '14', 'RegNum' => '83172', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN4', 'EDCode' => '938', 'Amount' => '1841', 'Balance' => '47866', 'Name' => 'Mr JOHN Syengo Muthui', 'Remarks' => 'sLoan'),
    4 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2003012959', 'IDNum' => '22054314', 'AgentType' => '14', 'RegNum' => '83172', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '60000', 'Name' => 'Mr JOHN Syengo Muthui', 'Remarks' => 'sShare'),
    5 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2003012959', 'IDNum' => '22054314', 'AgentType' => '14', 'RegNum' => '83172', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr JOHN Syengo Muthui', 'Remarks' => 'sRisk'),
    6 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2006060202', 'IDNum' => '22967845', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSL', 'EDCode' => '938', 'Amount' => '6028.57', 'Balance' => '204971.43', 'Name' => 'Mis KENTICE Khavai Ligami', 'Remarks' => 'sLoan'),
    7 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2006060202', 'IDNum' => '22967845', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '105000', 'Name' => 'Mis KENTICE Khavai Ligami', 'Remarks' => 'sShare'),
    8 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2006060202', 'IDNum' => '22967845', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mis KENTICE Khavai Ligami', 'Remarks' => 'sRisk'),
    9 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2008162563', 'IDNum' => '25877764', 'AgentType' => '14', 'RegNum' => '92961', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSL', 'EDCode' => '938', 'Amount' => '5647.56', 'Balance' => '163779.25', 'Name' => 'Mr DAVID  Githui', 'Remarks' => 'sLoan'),
    10 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2008162563', 'IDNum' => '25877764', 'AgentType' => '14', 'RegNum' => '92961', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '106800', 'Name' => 'Mr DAVID  Githui', 'Remarks' => 'sShare'),
    11 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2008162563', 'IDNum' => '25877764', 'AgentType' => '14', 'RegNum' => '92961', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr DAVID  Githui', 'Remarks' => 'sRisk'),
    12 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20130032996', 'IDNum' => '1126527', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0076', 'EDCode' => '939', 'Amount' => '30000', 'Balance' => '120000', 'Name' => 'Mr BENJAMIN Kai Chilumo', 'Remarks' => 'sShare'),
    13 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20130032996', 'IDNum' => '1126527', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0076', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr BENJAMIN Kai Chilumo', 'Remarks' => 'sRisk'),
    14 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408124', 'IDNum' => '22123134', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0030', 'EDCode' => '938', 'Amount' => '21335.14', 'Balance' => '682724.44', 'Name' => 'Mr SHADRACK Ronoh Chelelmet', 'Remarks' => 'sLoan'),
    15 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408124', 'IDNum' => '22123134', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN15', 'EDCode' => '938', 'Amount' => '28859.21', 'Balance' => '432894.19', 'Name' => 'Mr SHADRACK Ronoh Chelelmet', 'Remarks' => 'sLoan'),
    16 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408124', 'IDNum' => '22123134', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1234', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '444000', 'Name' => 'Mr SHADRACK Ronoh Chelelmet', 'Remarks' => 'sShare'),
    17 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408124', 'IDNum' => '22123134', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1234', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr SHADRACK Ronoh Chelelmet', 'Remarks' => 'sRisk'),
    18 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408158', 'IDNum' => '24227707', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN3', 'EDCode' => '938', 'Amount' => '26787.06', 'Balance' => '429149.22', 'Name' => 'Ms GRACE Njeri Maina', 'Remarks' => 'sLoan'),
    19 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408158', 'IDNum' => '24227707', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '1190055.46', 'Name' => 'Ms GRACE Njeri Maina', 'Remarks' => 'sShare'),
    20 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408158', 'IDNum' => '24227707', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms GRACE Njeri Maina', 'Remarks' => 'sRisk'),
    21 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408182', 'IDNum' => '27351904', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '429000', 'Name' => 'Ms KALTHOUM Abdulaziz Kadhi', 'Remarks' => 'sShare'),
    22 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408182', 'IDNum' => '27351904', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms KALTHOUM Abdulaziz Kadhi', 'Remarks' => 'sRisk'),
    23 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160116487', 'IDNum' => '28000212', 'AgentType' => '14', 'RegNum' => '', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0015', 'EDCode' => '938', 'Amount' => '16228.19', 'Balance' => '519302.24', 'Name' => 'Mr ISAAC Kiplimo Songok', 'Remarks' => 'sLoan'),
    24 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160116487', 'IDNum' => '28000212', 'AgentType' => '14', 'RegNum' => '', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0020', 'EDCode' => '938', 'Amount' => '19557.81', 'Balance' => '547618.52', 'Name' => 'Mr ISAAC Kiplimo Songok', 'Remarks' => 'sLoan'),
    25 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160116487', 'IDNum' => '28000212', 'AgentType' => '14', 'RegNum' => '', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '2211', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '371500', 'Name' => 'Mr ISAAC Kiplimo Songok', 'Remarks' => 'sShare'),
    26 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160116487', 'IDNum' => '28000212', 'AgentType' => '14', 'RegNum' => '', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '2211', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr ISAAC Kiplimo Songok', 'Remarks' => 'sRisk'),
    27 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639323', 'IDNum' => '23750468', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '250000', 'Name' => 'Ms GRACE Mbithe Mutemi', 'Remarks' => 'sShare'),
    28 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639323', 'IDNum' => '23750468', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms GRACE Mbithe Mutemi', 'Remarks' => 'sRisk'),
    29 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639349', 'IDNum' => '22912107', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HDMSACCO', 'EDCode' => '938', 'Amount' => '54213.18', 'Balance' => '1138476.66', 'Name' => 'Ms CHRISTINE Mumbi Githaiga', 'Remarks' => 'sLoan'),
    30 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639349', 'IDNum' => '22912107', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '15000', 'Balance' => '1334000', 'Name' => 'Ms CHRISTINE Mumbi Githaiga', 'Remarks' => 'sShare'),
    31 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639349', 'IDNum' => '22912107', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms CHRISTINE Mumbi Githaiga', 'Remarks' => 'sRisk'),
    32 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639438', 'IDNum' => '25244870', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma loan', 'EDCode' => '938', 'Amount' => '17895.17', 'Balance' => '536855.24', 'Name' => 'Mr DANIEL Ebole Bulimo', 'Remarks' => 'sLoan'),
    33 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639438', 'IDNum' => '25244870', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN14', 'EDCode' => '938', 'Amount' => '28617.42', 'Balance' => '400643.76', 'Name' => 'Mr DANIEL Ebole Bulimo', 'Remarks' => 'sLoan'),
    34 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639438', 'IDNum' => '25244870', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1144', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '369000', 'Name' => 'Mr DANIEL Ebole Bulimo', 'Remarks' => 'sShare'),
    35 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639438', 'IDNum' => '25244870', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1144', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr DANIEL Ebole Bulimo', 'Remarks' => 'sRisk'),
    36 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639446', 'IDNum' => '25357828', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSL', 'EDCode' => '938', 'Amount' => '30035.19', 'Balance' => '1141337.14', 'Name' => 'Ms BERYL Awuor Odiembo', 'Remarks' => 'sLoan'),
    37 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639446', 'IDNum' => '25357828', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma Sacco Shares', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '547000', 'Name' => 'Ms BERYL Awuor Odiembo', 'Remarks' => 'sShare'),
    38 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639446', 'IDNum' => '25357828', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma Sacco Shares', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms BERYL Awuor Odiembo', 'Remarks' => 'sRisk'),
    39 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639454', 'IDNum' => '29096675', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0041 3', 'EDCode' => '937', 'Amount' => '0', 'Balance' => '0', 'Name' => 'Mr MICHAEL Oduor Ogwang', 'Remarks' => 'sInterest'),
    40 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639454', 'IDNum' => '29096675', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0041 3', 'EDCode' => '938', 'Amount' => '25044.3', 'Balance' => '826461.73', 'Name' => 'Mr MICHAEL Oduor Ogwang', 'Remarks' => 'sLoan'),
    41 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639454', 'IDNum' => '29096675', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '631000', 'Name' => 'Mr MICHAEL Oduor Ogwang', 'Remarks' => 'sShare'),
    42 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639454', 'IDNum' => '29096675', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr MICHAEL Oduor Ogwang', 'Remarks' => 'sRisk'),
    43 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639462', 'IDNum' => '29257775', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0072', 'EDCode' => '938', 'Amount' => '40034.06', 'Balance' => '1321123.82', 'Name' => 'Mr EDWIN Onyango Ouma', 'Remarks' => 'sLoan'),
    44 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639462', 'IDNum' => '29257775', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '4444', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '342000', 'Name' => 'Mr EDWIN Onyango Ouma', 'Remarks' => 'sShare'),
    45 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639462', 'IDNum' => '29257775', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '4444', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr EDWIN Onyango Ouma', 'Remarks' => 'sRisk'),
    46 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639470', 'IDNum' => '29356014', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0023', 'EDCode' => '938', 'Amount' => '29121.71', 'Balance' => '1164868.53', 'Name' => 'Ms FLORENCE Serena Mokuah', 'Remarks' => 'sLoan'),
    47 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639470', 'IDNum' => '29356014', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES2', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '57000', 'Name' => 'Ms FLORENCE Serena Mokuah', 'Remarks' => 'sShare'),
    48 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639470', 'IDNum' => '29356014', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES2', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms FLORENCE Serena Mokuah', 'Remarks' => 'sRisk'),
    49 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639496', 'IDNum' => '29417761', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0013', 'EDCode' => '938', 'Amount' => '27431.81', 'Balance' => '850386.22', 'Name' => 'Ms ESTHER Muringo Kariuki', 'Remarks' => 'sLoan'),
    50 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639496', 'IDNum' => '29417761', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0013 - 1', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '20000', 'Name' => 'Ms ESTHER Muringo Kariuki', 'Remarks' => 'sShare'),
    51 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639496', 'IDNum' => '29417761', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0013 - 1', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms ESTHER Muringo Kariuki', 'Remarks' => 'sRisk'),
    52 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639501', 'IDNum' => '29696261', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/008', 'EDCode' => '938', 'Amount' => '7033.28', 'Balance' => '196931.76', 'Name' => 'Mr RON Rufus Ragui Mucheneh', 'Remarks' => 'sLoan'),
    53 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639501', 'IDNum' => '29696261', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '704000', 'Name' => 'Mr RON Rufus Ragui Mucheneh', 'Remarks' => 'sShare'),
    54 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639501', 'IDNum' => '29696261', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr RON Rufus Ragui Mucheneh', 'Remarks' => 'sRisk'),
    55 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639519', 'IDNum' => '29895626', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma loan', 'EDCode' => '938', 'Amount' => '24722.17', 'Balance' => '964164.59', 'Name' => 'Ms RUTH Wangare Woresha', 'Remarks' => 'sLoan'),
    56 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639519', 'IDNum' => '29895626', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22112', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '508000', 'Name' => 'Ms RUTH Wangare Woresha', 'Remarks' => 'sShare'),
    57 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639519', 'IDNum' => '29895626', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22112', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms RUTH Wangare Woresha', 'Remarks' => 'sRisk'),
    58 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639527', 'IDNum' => '30279673', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSL', 'EDCode' => '938', 'Amount' => '27901.96', 'Balance' => '1004470.64', 'Name' => 'Ms ELIZABETH Hiuko Mwangi', 'Remarks' => 'sLoan'),
    59 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639527', 'IDNum' => '30279673', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '254000', 'Name' => 'Ms ELIZABETH Hiuko Mwangi', 'Remarks' => 'sShare'),
    60 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639527', 'IDNum' => '30279673', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Ms ELIZABETH Hiuko Mwangi', 'Remarks' => 'sRisk'),
    61 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639535', 'IDNum' => '32029168', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma loan', 'EDCode' => '938', 'Amount' => '9584.11', 'Balance' => '287523.37', 'Name' => 'Mr JAMES Lemuja Peria', 'Remarks' => 'sLoan'),
    62 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639535', 'IDNum' => '32029168', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '222', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '177000', 'Name' => 'Mr JAMES Lemuja Peria', 'Remarks' => 'sShare'),
    63 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639535', 'IDNum' => '32029168', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '222', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr JAMES Lemuja Peria', 'Remarks' => 'sRisk'),
    64 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639569', 'IDNum' => '22456900', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKS/MN/0035', 'EDCode' => '938', 'Amount' => '10338.16', 'Balance' => '361835.59', 'Name' => 'Mr WYCLIFFE Muchiti Lisienyelo', 'Remarks' => 'sLoan'),
    65 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639569', 'IDNum' => '22456900', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '10000', 'Name' => 'Mr WYCLIFFE Muchiti Lisienyelo', 'Remarks' => 'sShare'),
    66 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639569', 'IDNum' => '22456900', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr WYCLIFFE Muchiti Lisienyelo', 'Remarks' => 'sRisk'),
    67 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639593', 'IDNum' => '24211310', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0015', 'EDCode' => '938', 'Amount' => '11259.86', 'Balance' => '360315.56', 'Name' => 'Mr ERIC Mutwiri Mburugu', 'Remarks' => 'sLoan'),
    68 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639593', 'IDNum' => '24211310', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN21', 'EDCode' => '938', 'Amount' => '33659.57', 'Balance' => '471233.97', 'Name' => 'Mr ERIC Mutwiri Mburugu', 'Remarks' => 'sLoan'),
    69 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639593', 'IDNum' => '24211310', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22111', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '285000', 'Name' => 'Mr ERIC Mutwiri Mburugu', 'Remarks' => 'sShare'),
    70 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639593', 'IDNum' => '24211310', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22111', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr ERIC Mutwiri Mburugu', 'Remarks' => 'sRisk'),
    71 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20178401190', 'IDNum' => '13099288', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '447754', 'Name' => 'Mr LUKA Mwangi Muraguri', 'Remarks' => 'sShare'),
    72 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20178401190', 'IDNum' => '13099288', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr LUKA Mwangi Muraguri', 'Remarks' => 'sRisk'),
    73 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20190082092', 'IDNum' => '31485400', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '65000', 'Name' => 'Miss ANN  V. Nabalayo Nalyanya', 'Remarks' => 'sShare'),
    74 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20190082092', 'IDNum' => '31485400', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Miss ANN  V. Nabalayo Nalyanya', 'Remarks' => 'sRisk'),
    75 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071447', 'IDNum' => '24037709', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0010', 'EDCode' => '938', 'Amount' => '20626.83', 'Balance' => '123761.02', 'Name' => 'Mr. JAPHETH Mutinda Muthama', 'Remarks' => 'sLoan'),
    76 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071447', 'IDNum' => '24037709', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '10000', 'Balance' => '240000', 'Name' => 'Mr. JAPHETH Mutinda Muthama', 'Remarks' => 'sShare'),
    77 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071447', 'IDNum' => '24037709', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr. JAPHETH Mutinda Muthama', 'Remarks' => 'sRisk'),
    78 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071489', 'IDNum' => '29888931', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSC', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '10000', 'Name' => 'Mr. PAPOI Allan Ekasi', 'Remarks' => 'sShare'),
    79 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071489', 'IDNum' => '29888931', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSC', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr. PAPOI Allan Ekasi', 'Remarks' => 'sRisk'),
    80 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220328713', 'IDNum' => '29797758', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKS/MN/0072A', 'EDCode' => '938', 'Amount' => '14896.08', 'Balance' => '148960.84', 'Name' => 'Mr. HILLARY Likovelo Isanya', 'Remarks' => 'sLoan'),
    81 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220328713', 'IDNum' => '29797758', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'LOAN2', 'EDCode' => '938', 'Amount' => '4521.44', 'Balance' => '117557.6', 'Name' => 'Mr. HILLARY Likovelo Isanya', 'Remarks' => 'sLoan'),
    82 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220328713', 'IDNum' => '29797758', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '10000', 'Balance' => '210000', 'Name' => 'Mr. HILLARY Likovelo Isanya', 'Remarks' => 'sShare'),
    83 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220328713', 'IDNum' => '29797758', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '949', 'Amount' => '200', 'Balance' => '0', 'Name' => 'Mr. HILLARY Likovelo Isanya', 'Remarks' => 'sRisk'),
);


  foreach($list as $key)
  {
    $member=Member::where(['PayrollNum'=>$key['PayrollNum']])->first();
      if($member)
      {
        $edcode=EdCode::where(['EDCode'=>$key['EDCode']])->first();
        DB::table('member_transactions')->insert([
                    'MemberId'=>$member->id,
                    'Paydate' =>date("Y-m-d",strtotime($key['Paydate'])),
                    'SiteId'=>$key['SiteId'],
                    'PayrollNum'=>$key['PayrollNum'],
                    'IdNumber'=>$key['IDNum'],
                    'AgentType'=>$key['AgentType'],
                    'RegNum'=>$key['RegNum'],
                    'AgentCode'=>$key['AgentCode'],
                    'BranchCode'=>$key['BranchCode'],
                    'AccountNum'=>$key['AccountNum'],
                    'EDCode'=>$key['EDCode'],
                    'EdName'=>$edcode->EdName,
                    'Amount'=>$key['Amount'],
                    'Balance'=>$key['Balance'],
                    'Name'=>$key['Name'],
                    'Remarks'=>$key['Remarks'],

                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);

      }

    
  }






    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
