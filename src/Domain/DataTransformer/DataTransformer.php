<?php
/**
 * Emmanuel BORGES
 * contact@eborges.fr
 */

namespace App\Domain\DataTransformer;

class DataTransformer implements DataTransformerInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function transform(array $data): array
    {
        $phaseId = 1;
        if (\count($data) > 0) {

            // order by date
            usort($data, function($data1, $data2) {
               return $data1['date'] <=> $data2['date'];
            });
            // generate list
            $tmp = [
                'id' => (int)$data[0]['competition']['id'],
                'label' => (string)$data[0]['competition']['label'],
                'logo' => (string)$data[0]['competition']['logoPath'],
                'phases' => []
            ];
            foreach ($data as $event) {
                $phaseName = $event['moreInfo'];
                if (!isset($tmp['phases'][$phaseName])) {
                    // add phase
                    $tmp['phases'][$phaseName] = [
                        'id' => $phaseId,
                        'label' => $phaseName,
                        'events' => []
                    ];
                    $phaseId++;
                }
                $tmp['phases'][$phaseName]['events'][] = [
                    'id' => (int)$event['id'],
                    'date' => (string)$event['date'],
                    'state' => (string)$event['state'],
                    'gameScoreTeam1' => (int)$event['gameScoreTeam1'],
                    'team1Id' => (int)$event['competitors'][0]['id'],
                    'team1Logo' => (string)$event['competitors'][0]['logoPath'],
                    'scoreTeam1' => (int)$event['scoreTeam1'],
                    'team1Label' => (string)$event['competitors'][0]['label'],
                    'gameScoreTeam2' => (int)$event['gameScoreTeam2'],
                    'team2Id' => (int)$event['competitors'][1]['id'],
                    'team2Logo' => (string)$event['competitors'][1]['logoPath'],
                    'scoreTeam2' => (int)$event['scoreTeam2'],
                    'team2Label' => (string)$event['competitors'][1]['label'],
                    'winner' => (int)$event['winner'],
                    'url' => (string)$event['url']
                ];
            }
            return $tmp;
        }

        return [];
    }
}
