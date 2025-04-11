<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $list=array(
    0 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '1989088255', 'IDNum' => '9692528', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '22000', 'Name' => 'Mr KOTI Cosmus Nguthi', 'Remarks' => 'sShare'),
    1 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2003012959', 'IDNum' => '22054314', 'AgentType' => '14', 'RegNum' => '83172', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '60000', 'Name' => 'Mr JOHN Syengo Muthui', 'Remarks' => 'sShare'),
    2 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2006060202', 'IDNum' => '22967845', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '105000', 'Name' => 'Mis KENTICE Khavai Ligami', 'Remarks' => 'sShare'),
    3 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '2008162563', 'IDNum' => '25877764', 'AgentType' => '14', 'RegNum' => '92961', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '106800', 'Name' => 'Mr DAVID  Githui', 'Remarks' => 'sShare'),
    4 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20130032996', 'IDNum' => '1126527', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0076', 'EDCode' => '939', 'Amount' => '30000', 'Balance' => '120000', 'Name' => 'Mr BENJAMIN Kai Chilumo', 'Remarks' => 'sShare'),
    5 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408124', 'IDNum' => '22123134', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1234', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '444000', 'Name' => 'Mr SHADRACK Ronoh Chelelmet', 'Remarks' => 'sShare'),
    6 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408158', 'IDNum' => '24227707', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '1190055.46', 'Name' => 'Ms GRACE Njeri Maina', 'Remarks' => 'sShare'),
    7 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20152408182', 'IDNum' => '27351904', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '429000', 'Name' => 'Ms KALTHOUM Abdulaziz Kadhi', 'Remarks' => 'sShare'),
    8 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160116487', 'IDNum' => '28000212', 'AgentType' => '14', 'RegNum' => '', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '2211', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '371500', 'Name' => 'Mr ISAAC Kiplimo Songok', 'Remarks' => 'sShare'),
    9 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639323', 'IDNum' => '23750468', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '250000', 'Name' => 'Ms GRACE Mbithe Mutemi', 'Remarks' => 'sShare'),
    10 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639349', 'IDNum' => '22912107', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '15000', 'Balance' => '1334000', 'Name' => 'Ms CHRISTINE Mumbi Githaiga', 'Remarks' => 'sShare'),
    11 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639438', 'IDNum' => '25244870', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '1144', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '369000', 'Name' => 'Mr DANIEL Ebole Bulimo', 'Remarks' => 'sShare'),
    12 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639446', 'IDNum' => '25357828', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'Huduma Sacco Shares', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '547000', 'Name' => 'Ms BERYL Awuor Odiembo', 'Remarks' => 'sShare'),
    13 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639454', 'IDNum' => '29096675', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '631000', 'Name' => 'Mr MICHAEL Oduor Ogwang', 'Remarks' => 'sShare'),
    14 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639462', 'IDNum' => '29257775', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '4444', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '342000', 'Name' => 'Mr EDWIN Onyango Ouma', 'Remarks' => 'sShare'),
    15 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639470', 'IDNum' => '29356014', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES2', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '57000', 'Name' => 'Ms FLORENCE Serena Mokuah', 'Remarks' => 'sShare'),
    16 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639496', 'IDNum' => '29417761', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS/MN/0013 - 1', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '20000', 'Name' => 'Ms ESTHER Muringo Kariuki', 'Remarks' => 'sShare'),
    17 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639501', 'IDNum' => '29696261', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '704000', 'Name' => 'Mr RON Rufus Ragui Mucheneh', 'Remarks' => 'sShare'),
    18 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639519', 'IDNum' => '29895626', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22112', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '508000', 'Name' => 'Ms RUTH Wangare Woresha', 'Remarks' => 'sShare'),
    19 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639527', 'IDNum' => '30279673', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '254000', 'Name' => 'Ms ELIZABETH Hiuko Mwangi', 'Remarks' => 'sShare'),
    20 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639535', 'IDNum' => '32029168', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '222', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '177000', 'Name' => 'Mr JAMES Lemuja Peria', 'Remarks' => 'sShare'),
    21 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639569', 'IDNum' => '22456900', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HKSS', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '10000', 'Name' => 'Mr WYCLIFFE Muchiti Lisienyelo', 'Remarks' => 'sShare'),
    22 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20160639593', 'IDNum' => '24211310', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => '22111', 'EDCode' => '939', 'Amount' => '3000', 'Balance' => '285000', 'Name' => 'Mr ERIC Mutwiri Mburugu', 'Remarks' => 'sShare'),
    23 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20178401190', 'IDNum' => '13099288', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '447754', 'Name' => 'Mr LUKA Mwangi Muraguri', 'Remarks' => 'sShare'),
    24 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20190082092', 'IDNum' => '31485400', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '5000', 'Balance' => '65000', 'Name' => 'Miss ANN  V. Nabalayo Nalyanya', 'Remarks' => 'sShare'),
    25 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071447', 'IDNum' => '24037709', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '10000', 'Balance' => '240000', 'Name' => 'Mr. JAPHETH Mutinda Muthama', 'Remarks' => 'sShare'),
    26 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220071489', 'IDNum' => '29888931', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'HSC', 'EDCode' => '939', 'Amount' => '2000', 'Balance' => '10000', 'Name' => 'Mr. PAPOI Allan Ekasi', 'Remarks' => 'sShare'),
    27 => array('Paydate' => '20250224', 'SiteId' => '10307', 'PayrollNum' => '20220328713', 'IDNum' => '29797758', 'AgentType' => '14', 'RegNum' => '0', 'AgentCode' => '21870', 'BranchCode' => '', 'AccountNum' => 'SHARES', 'EDCode' => '939', 'Amount' => '10000', 'Balance' => '210000', 'Name' => 'Mr. HILLARY Likovelo Isanya', 'Remarks' => 'sShare'),
);


  foreach($list as $key)
  {



      DB::table('members')->insert([
                    'IdNumber'=>trim($key['IDNum']),
                    'PayrollNum' =>trim($key['PayrollNum']),
                    'MemberName'=>$key['Name'],
                    'MonthlyContribution'=>doubleval($key['Amount']),
                    'CurrentBalance'=>doubleval($key['Balance']),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);
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
