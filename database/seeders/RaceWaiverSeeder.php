<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RaceWaiverSeeder extends Seeder {

  /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('race_waiver')->delete();

    DB::table('race_waiver')->insert(array(
      array('id' => 1, 'waiver' => '
      In consideration of being allowed to participate in any way in the above referenced Race competition(s), race(s), related events (the “Event”) and/or activities, I, the undersigned, acknowledge, covenant and agree that:
               1. The risk of injury and/or death from the activities involved in the Race and the Event is significant including, but not limited to the following: (i) drowning; (ii) near-drowning; (iii) sprains; (iv) strains; (v) fractures; (vi) heat and cold injuries; (vii) over-use syndrome; (viii) injuries involving vehicles; (ix) animal bites and/or stings; (x) contact with poisonous plants; (xi) accidents involving, but not limited to paddling, climbing, biking, hiking, skiing, snow shoeing, travel by boat, truck, car, or other convenience;(xii) heart attack and (xiii) the potential for permanent paralysis and/or death. While particular rules, equipment, and personal discipline may reduce this risk, the risk of death or serious injury does exist;
               2. AFTER OPPORTUNITY TO FULLY INFORM MYSELF ABOUT THE EVENT, I KNOWINGLY AND FREELY ASSUME AND ACCEPT ALL SUCH RISKS, BOTH KNOWN AND UNKNOWN, and assume full responsibility and all risks for my participation in the Event;
               3. I voluntarily agree to comply with the stated and customary terms and conditions for participation. If, however, I observe any unusual and/or significant hazard my presence or participation, I will remove myself from participation and bring such hazard to the attention of the nearest official;
               4. I, for myself and on behalf of my heirs, assigns, personal representatives and/or next of kin, forever WAIVE, RELEASE, DISCHARGE and COVENANT NOT TO APPALACHIAN TIMING GROUP and their officers, directors, representatives, officials, principals, agents and/or employees, subsidiaries, and/or assigns, as well as their independent contractors, sponsoring agencies, sponsors, advertisers, volunteers, and if applicable, owners and lessors of the premises used to conduct the Event (collectively, the "Releasees"), WITH RESPECT TO AND ALL INJURY, DISABILITY, DEATH, and/or loss or damage to person or property, incurred by me in connection with participation in the Event. I further agree to indemnify, defend and hold harmless Releasees from any loss, liability, cost, claim or damages arising from my participation in or association with activities and events organized and sponsored by the Appalchian Timing Group or connected with the Event.
               5. I attest and verify that, unless otherwise indicated below, I am over 18 years of age, am free from all illnesses, injuries and defects that could interfere with my safe  participation in the Event and that I am physically fit and sufficiently trained to participate in all activities associated with the Event. My participation in activities and events organized or sponsored by Appalachian Timing Group is entirely voluntary. I further certify and represent that on the date of the Event I will possess be covered by medical/health insurance, individually or as part of an organization.
               6. I consent to administration of first aid and other medical treatment in the event of injury or illness and hereby release and indemnify Releasees from any and all liability or claims arising out of such treatment.
               7. The Releasees reserve the right, in their sole and absolute discretion, to postpone, cancel, or modify the event due to weather conditions, Acts of God or other factors beyond the control of the Releasees that might affect the health and/or safety of the participants. No refunds will be granted.
               8. I irrevocably grant unlimited permission to Releasees, to use, reproduce, sell and distribute any and all photographs, images, videotapes, motion pictures, recordings, or any other depiction of any kind of me or of my participation in the Event or related activity for any legitimate purpose in perpetuity and I understand that I shall not be entitled to any compensation therefore.
           
      This event follows the standard running industry policy: All entry fees are non-refundable. We reserve the right to postpone or cancel the event due to circumstances beyond our control such as a natural disaster or emergency or as required to protect the safety of participants and staff. No refunds will be issued under these circumstances. We reserve the right to change the details of the event without prior notice. I understand that my entry fee is nonrefundable and bib numbers are non transferable. In addition, this includes circumstances such as Force Majeure and an Act of God which causes the event to be cancelled or your registration to be transferred to a Virtual entrant with no refund. 
      
      The undersigned acknowledges and understands that exposure to disease causing organisms, such as COVID-19, and personal contact with others, including but not limited to participates, non-participants, organizers, volunteers, onlookers and other individuals in the race course involves a certain degree of risk that could result in illness, permanent disability or death. The undersigned acknowledges that APTiming LLC has not screened or tested any of the aforementioned individuals for such diseases. After fully and carefully considering all the potential risks involved, I hereby assume the same and agree to release and hold-harmless APTiming LLC and the event and its employees, officers, agents, volunteers, vendors and contractors from and against all claims and liability resulting from exposure to disease causing organisms such as COVID-19.
      
        I HAVE READ THIS RELEASE OF LIABILITY AND ASSUMPTION OF RISK AGREEMENT, FULLY UNDERSTAND ITS TERMS, THAT I HAVE GIVEN UP SUBSTANTIAL RIGHTS BY SIGNING IT, AND SIGN IT FREELY AND VOLUNTARILY WITHOUT ANY INDUCEMENT.'),
    ));
  }

}
?>
