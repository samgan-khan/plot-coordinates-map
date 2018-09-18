<?php

include ('../config/debug.php');
include ('../model/execute.php');

use model\Execute;

$query = new Execute();

$latLngs = $query->getAllCoordinates();

$parmas;
foreach ($latLngs as $key => $latLng) {
    $parmas[$key] = implode(',', $latLng);
}

$parmas = implode('|', $parmas);

$url = "https://roads.googleapis.com/v1/snapToRoads?path=$parmas&interpolate=true&key=APIKEY";

$filter = [];
foreach (response()['snappedPoints'] as $key => $item) {
    $filter[$key] = [
        'lat' => $item['location']['latitude'],
        'lng' => $item['location']['longitude']
    ];
}

echo json_encode(
    [
        'raw' => $latLngs,
        'sorted' => $filter
    ],
    JSON_NUMERIC_CHECK
);

function response()
{
    return array (
        'snappedPoints' =>
            array (
                0 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865462182517514833079985692165791988372802734375,
                                'longitude' => 75.76640617434071600655443035066127777099609375,
                            ),
                        'originalIndex' => 0,
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                1 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865128999999999592773747281171381473541259765625,
                                'longitude' => 75.7660458999999946172465570271015167236328125,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                2 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865113599999997262557371868751943111419677734375,
                                'longitude' => 75.7660393000000027541318559087812900543212890625,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                3 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86509860000000315949364448897540569305419921875,
                                'longitude' => 75.7660360999999937803295324556529521942138671875,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                4 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865077700000000504587660543620586395263671875,
                                'longitude' => 75.7660368000000090660250862129032611846923828125,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                5 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865058500000003505192580632865428924560546875,
                                'longitude' => 75.766040500000002566594048403203487396240234375,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                6 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86504169999999902529452810995280742645263671875,
                                'longitude' => 75.766049299999991717413649894297122955322265625,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                7 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8646715000000000372892827726900577545166015625,
                                'longitude' => 75.7664726000000001704393071122467517852783203125,
                            ),
                        'placeId' => 'ChIJrYleCqy1bTkROQ7H1GDD0Tg',
                    ),
                8 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8646715000000000372892827726900577545166015625,
                                'longitude' => 75.7664726000000001704393071122467517852783203125,
                            ),
                        'placeId' => 'ChIJ_avbBay1bTkR0f0pGjp_onM',
                    ),
                9 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJ_avbBay1bTkR0f0pGjp_onM',
                    ),
                10 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJYa3IHKy1bTkR-zBm27crcFQ',
                    ),
                11 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86409259999999932233549770899116992950439453125,
                                'longitude' => 75.7671385000000014997567632235586643218994140625,
                            ),
                        'placeId' => 'ChIJYa3IHKy1bTkR-zBm27crcFQ',
                    ),
                12 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86409259999999932233549770899116992950439453125,
                                'longitude' => 75.7671385000000014997567632235586643218994140625,
                            ),
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                13 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86442477217099877861983259208500385284423828125,
                                'longitude' => 75.7675154104648385100517771206796169281005859375,
                            ),
                        'originalIndex' => 1,
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                14 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86494640000000089230525190941989421844482421875,
                                'longitude' => 75.7681072999999969397322274744510650634765625,
                            ),
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                15 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86494640000000089230525190941989421844482421875,
                                'longitude' => 75.7681072999999969397322274744510650634765625,
                            ),
                        'placeId' => 'ChIJAVsuPKy1bTkRPeb0Hi0xsJ8',
                    ),
                16 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865311000000001939724825206212699413299560546875,
                                'longitude' => 75.7676747999999946614479995332658290863037109375,
                            ),
                        'placeId' => 'ChIJAVsuPKy1bTkRPeb0Hi0xsJ8',
                    ),
                17 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865311000000001939724825206212699413299560546875,
                                'longitude' => 75.7676747999999946614479995332658290863037109375,
                            ),
                        'placeId' => 'ChIJj0HIFqy1bTkR9F7R3IEtpxQ',
                    ),
                18 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864861731502333697108042542822659015655517578125,
                                'longitude' => 75.7672087666901035163391497917473316192626953125,
                            ),
                        'originalIndex' => 2,
                        'placeId' => 'ChIJj0HIFqy1bTkR9F7R3IEtpxQ',
                    ),
                19 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864681199999996152882886235602200031280517578125,
                                'longitude' => 75.76702149999999846841092221438884735107421875,
                            ),
                        'placeId' => 'ChIJj0HIFqy1bTkR9F7R3IEtpxQ',
                    ),
                20 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864681199999996152882886235602200031280517578125,
                                'longitude' => 75.76702149999999846841092221438884735107421875,
                            ),
                        'placeId' => 'ChIJaa4vBay1bTkR2PPYgSKx4hA',
                    ),
                21 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJaa4vBay1bTkR2PPYgSKx4hA',
                    ),
                22 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJYa3IHKy1bTkR-zBm27crcFQ',
                    ),
                23 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864299432028957426155102439224720001220703125,
                                'longitude' => 75.7668995238501707945033558644354343414306640625,
                            ),
                        'originalIndex' => 3,
                        'placeId' => 'ChIJYa3IHKy1bTkR-zBm27crcFQ',
                    ),
                24 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86409259999999932233549770899116992950439453125,
                                'longitude' => 75.7671385000000014997567632235586643218994140625,
                            ),
                        'placeId' => 'ChIJYa3IHKy1bTkR-zBm27crcFQ',
                    ),
                25 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86409259999999932233549770899116992950439453125,
                                'longitude' => 75.7671385000000014997567632235586643218994140625,
                            ),
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                26 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864443909229233753421794972382485866546630859375,
                                'longitude' => 75.7675371250816169776953756809234619140625,
                            ),
                        'originalIndex' => 4,
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                27 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864837361185838204846731969155371189117431640625,
                                'longitude' => 75.7679835733016346921431249938905239105224609375,
                            ),
                        'originalIndex' => 5,
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                28 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86494640000000089230525190941989421844482421875,
                                'longitude' => 75.7681072999999969397322274744510650634765625,
                            ),
                        'placeId' => 'ChIJEdWhGKy1bTkR4fRa6NdBLBc',
                    ),
                29 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86494640000000089230525190941989421844482421875,
                                'longitude' => 75.7681072999999969397322274744510650634765625,
                            ),
                        'placeId' => 'ChIJAVsuPKy1bTkRPeb0Hi0xsJ8',
                    ),
                30 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865311000000001939724825206212699413299560546875,
                                'longitude' => 75.7676747999999946614479995332658290863037109375,
                            ),
                        'placeId' => 'ChIJAVsuPKy1bTkRPeb0Hi0xsJ8',
                    ),
                31 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.865311000000001939724825206212699413299560546875,
                                'longitude' => 75.7676747999999946614479995332658290863037109375,
                            ),
                        'placeId' => 'ChIJj0HIFqy1bTkR9F7R3IEtpxQ',
                    ),
                32 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864681199999996152882886235602200031280517578125,
                                'longitude' => 75.76702149999999846841092221438884735107421875,
                            ),
                        'placeId' => 'ChIJj0HIFqy1bTkR9F7R3IEtpxQ',
                    ),
                33 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864681199999996152882886235602200031280517578125,
                                'longitude' => 75.76702149999999846841092221438884735107421875,
                            ),
                        'placeId' => 'ChIJaa4vBay1bTkR2PPYgSKx4hA',
                    ),
                34 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJaa4vBay1bTkR2PPYgSKx4hA',
                    ),
                35 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864421399999997674967744387686252593994140625,
                                'longitude' => 75.766758600000002843444235622882843017578125,
                            ),
                        'placeId' => 'ChIJ_avbBay1bTkR0P0pGjp_onM',
                    ),
                36 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8646715000000000372892827726900577545166015625,
                                'longitude' => 75.7664726000000001704393071122467517852783203125,
                            ),
                        'placeId' => 'ChIJ_avbBay1bTkR0P0pGjp_onM',
                    ),
                37 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8646715000000000372892827726900577545166015625,
                                'longitude' => 75.7664726000000001704393071122467517852783203125,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                38 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864579199999997882741809007711708545684814453125,
                                'longitude' => 75.7663539999999926521923043765127658843994140625,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                39 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864557000000001352191247860901057720184326171875,
                                'longitude' => 75.7663328000000007023118087090551853179931640625,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                40 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86425220000000280151652987115085124969482421875,
                                'longitude' => 75.7659857999999957200998323969542980194091796875,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                41 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864247399999999998954081092961132526397705078125,
                                'longitude' => 75.765969799999993483652360737323760986328125,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                42 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8642468000000036454366636462509632110595703125,
                                'longitude' => 75.7659474999999957844920572824776172637939453125,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                43 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864259999999998029807102284394204616546630859375,
                                'longitude' => 75.765722199999999020292307250201702117919921875,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                44 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864258799999998217344909789972007274627685546875,
                                'longitude' => 75.7656994000000025835106498561799526214599609375,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                45 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8642540000000025202098186127841472625732421875,
                                'longitude' => 75.7656818999999899233444011770188808441162109375,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                46 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.864246800000000092722984845750033855438232421875,
                                'longitude' => 75.76566719999999577339622192084789276123046875,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                47 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86423370000000687696228851564228534698486328125,
                                'longitude' => 75.765647099999995361940818838775157928466796875,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                48 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8641559999999941510395728982985019683837890625,
                                'longitude' => 75.7655505999999974164893501438200473785400390625,
                            ),
                        'placeId' => 'ChIJVdoG-au1bTkRVZR5aRz-2iE',
                    ),
                49 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8641559999999941510395728982985019683837890625,
                                'longitude' => 75.7655505999999974164893501438200473785400390625,
                            ),
                        'placeId' => 'ChIJDRG6_au1bTkRgegF2J5OxIM',
                    ),
                50 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.863824599999997388977135415188968181610107421875,
                                'longitude' => 75.7659268999999966354153002612292766571044921875,
                            ),
                        'originalIndex' => 6,
                        'placeId' => 'ChIJDRG6_au1bTkRgegF2J5OxIM',
                    ),
                51 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.863824599999997388977135415188968181610107421875,
                                'longitude' => 75.7659268999999966354153002612292766571044921875,
                            ),
                        'placeId' => 'ChIJ5x28VKm1bTkRaFep3sGymJA',
                    ),
                52 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86340799999999973124431562609970569610595703125,
                                'longitude' => 75.766360800000001063381205312907695770263671875,
                            ),
                        'placeId' => 'ChIJ5x28VKm1bTkRaFep3sGymJA',
                    ),
                53 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86340799999999973124431562609970569610595703125,
                                'longitude' => 75.766360800000001063381205312907695770263671875,
                            ),
                        'placeId' => 'ChIJJ0-qra61bTkRyOewJCQz9Bc',
                    ),
                54 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.863335799999997988152244943194091320037841796875,
                                'longitude' => 75.7664597999999926969394437037408351898193359375,
                            ),
                        'placeId' => 'ChIJJ0-qra61bTkRyOewJCQz9Bc',
                    ),
                55 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.863335799999997988152244943194091320037841796875,
                                'longitude' => 75.7664597999999926969394437037408351898193359375,
                            ),
                        'placeId' => 'ChIJz2yjra61bTkRdRcjrlBqpSc',
                    ),
                56 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86329830000000384870872949250042438507080078125,
                                'longitude' => 75.7664181999999897243469604291021823883056640625,
                            ),
                        'placeId' => 'ChIJz2yjra61bTkRdRcjrlBqpSc',
                    ),
                57 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86329830000000384870872949250042438507080078125,
                                'longitude' => 75.7664181999999897243469604291021823883056640625,
                            ),
                        'placeId' => 'ChIJ985SSam1bTkRONhEcpdw-MM',
                    ),
                58 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86223369999999732726791989989578723907470703125,
                                'longitude' => 75.765235300000000506770447827875614166259765625,
                            ),
                        'placeId' => 'ChIJ985SSam1bTkRONhEcpdw-MM',
                    ),
                59 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86223369999999732726791989989578723907470703125,
                                'longitude' => 75.765235300000000506770447827875614166259765625,
                            ),
                        'placeId' => 'ChIJw0jbPqm1bTkRic1AIv8HHwg',
                    ),
                60 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.861952699999999794044924783520400524139404296875,
                                'longitude' => 75.7649425999999976966137182898819446563720703125,
                            ),
                        'placeId' => 'ChIJw0jbPqm1bTkRic1AIv8HHwg',
                    ),
                61 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.861952699999999794044924783520400524139404296875,
                                'longitude' => 75.7649425999999976966137182898819446563720703125,
                            ),
                        'placeId' => 'ChIJlXfUF6m1bTkRbArJKuoB4BA',
                    ),
                62 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8616147999999981266228132881224155426025390625,
                                'longitude' => 75.7645289999999960173227009363472461700439453125,
                            ),
                        'placeId' => 'ChIJlXfUF6m1bTkRbArJKuoB4BA',
                    ),
                63 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8616147999999981266228132881224155426025390625,
                                'longitude' => 75.7645289999999960173227009363472461700439453125,
                            ),
                        'placeId' => 'ChIJnQRgG6m1bTkRNkOWeEsqyMc',
                    ),
                64 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8611127478851585692609660327434539794921875,
                                'longitude' => 75.763970946942293949177837930619716644287109375,
                            ),
                        'originalIndex' => 7,
                        'placeId' => 'ChIJnQRgG6m1bTkRNkOWeEsqyMc',
                    ),
                65 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.86091730000000410427674069069325923919677734375,
                                'longitude' => 75.76375369999999520587152801454067230224609375,
                            ),
                        'placeId' => 'ChIJnQRgG6m1bTkRNkOWeEsqyMc',
                    ),
                66 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860856499999993474148141103796660900115966796875,
                                'longitude' => 75.7636837000000014086253941059112548828125,
                            ),
                        'placeId' => 'ChIJnQRgG6m1bTkRNkOWeEsqyMc',
                    ),
                67 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860856499999993474148141103796660900115966796875,
                                'longitude' => 75.7636837000000014086253941059112548828125,
                            ),
                        'placeId' => 'ChIJDxmhAam1bTkRvayswZ7-TEw',
                    ),
                68 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860762400000002259048414998687803745269775390625,
                                'longitude' => 75.7636059999999957881300360895693302154541015625,
                            ),
                        'placeId' => 'ChIJDxmhAam1bTkRvayswZ7-TEw',
                    ),
                69 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860762400000002259048414998687803745269775390625,
                                'longitude' => 75.7636059999999957881300360895693302154541015625,
                            ),
                        'placeId' => 'ChIJb8ofAKm1bTkRBgML3W1zUYg',
                    ),
                70 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860645999999999133933670236729085445404052734375,
                                'longitude' => 75.7634790999999978566847858019173145294189453125,
                            ),
                        'placeId' => 'ChIJb8ofAKm1bTkRBgML3W1zUYg',
                    ),
                71 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8604930999999993446181179024279117584228515625,
                                'longitude' => 75.763307099999991578442859463393688201904296875,
                            ),
                        'placeId' => 'ChIJb8ofAKm1bTkRBgML3W1zUYg',
                    ),
                72 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8604930999999993446181179024279117584228515625,
                                'longitude' => 75.763307099999991578442859463393688201904296875,
                            ),
                        'placeId' => 'ChIJsV6vVqi1bTkRPHtMRNvUTPQ',
                    ),
                73 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860000299999995831967680715024471282958984375,
                                'longitude' => 75.762765599999994492463883943855762481689453125,
                            ),
                        'placeId' => 'ChIJsV6vVqi1bTkRPHtMRNvUTPQ',
                    ),
                74 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.860000299999995831967680715024471282958984375,
                                'longitude' => 75.762765599999994492463883943855762481689453125,
                            ),
                        'placeId' => 'ChIJ961VRai1bTkRqeckTEMu8jw',
                    ),
                75 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85971579999999647725417162291705608367919921875,
                                'longitude' => 75.7624670000000008940332918427884578704833984375,
                            ),
                        'placeId' => 'ChIJ961VRai1bTkRqeckTEMu8jw',
                    ),
                76 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85971579999999647725417162291705608367919921875,
                                'longitude' => 75.7624670000000008940332918427884578704833984375,
                            ),
                        'placeId' => 'ChIJuXnfQKi1bTkRR-7EdExlzwc',
                    ),
                77 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85949308597390228214862872846424579620361328125,
                                'longitude' => 75.7622229863027172314104973338544368743896484375,
                            ),
                        'originalIndex' => 8,
                        'placeId' => 'ChIJuXnfQKi1bTkRR-7EdExlzwc',
                    ),
                78 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.859010999999998858811522950418293476104736328125,
                                'longitude' => 75.7616948000000007823473424650728702545166015625,
                            ),
                        'placeId' => 'ChIJuXnfQKi1bTkRR-7EdExlzwc',
                    ),
                79 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.859010999999998858811522950418293476104736328125,
                                'longitude' => 75.7616948000000007823473424650728702545166015625,
                            ),
                        'placeId' => 'ChIJTZHTFai1bTkRKStz87vJBfw',
                    ),
                80 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85879280000000335348886437714099884033203125,
                                'longitude' => 75.761431799999996883343555964529514312744140625,
                            ),
                        'placeId' => 'ChIJTZHTFai1bTkRKStz87vJBfw',
                    ),
                81 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85879280000000335348886437714099884033203125,
                                'longitude' => 75.761431799999996883343555964529514312744140625,
                            ),
                        'placeId' => 'ChIJN9elEKi1bTkRoO2JGR4fHQo',
                    ),
                82 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.858414700000000863155946717597544193267822265625,
                                'longitude' => 75.7610320000000001527951098978519439697265625,
                            ),
                        'placeId' => 'ChIJN9elEKi1bTkRoO2JGR4fHQo',
                    ),
                83 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.858414700000000863155946717597544193267822265625,
                                'longitude' => 75.7610320000000001527951098978519439697265625,
                            ),
                        'placeId' => 'ChIJZc1FG6i1bTkRAvb8HPvH2RE',
                    ),
                84 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.858167099999999294368535629473626613616943359375,
                                'longitude' => 75.7607536000000010290023055858910083770751953125,
                            ),
                        'placeId' => 'ChIJZc1FG6i1bTkRAvb8HPvH2RE',
                    ),
                85 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.858167099999999294368535629473626613616943359375,
                                'longitude' => 75.7607536000000010290023055858910083770751953125,
                            ),
                        'placeId' => 'ChIJFbRAAqi1bTkRAMbEvZfd24I',
                    ),
                86 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.857802600000002968272383441217243671417236328125,
                                'longitude' => 75.760355099999998174098436720669269561767578125,
                            ),
                        'placeId' => 'ChIJFbRAAqi1bTkRAMbEvZfd24I',
                    ),
                87 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.857802600000002968272383441217243671417236328125,
                                'longitude' => 75.760355099999998174098436720669269561767578125,
                            ),
                        'placeId' => 'ChIJGVNlBwi1bTkRRFeIy_tpvso',
                    ),
                88 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.857072300000002229580786661244928836822509765625,
                                'longitude' => 75.7595082999999931416823528707027435302734375,
                            ),
                        'placeId' => 'ChIJGVNlBwi1bTkRRFeIy_tpvso',
                    ),
                89 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.857072300000002229580786661244928836822509765625,
                                'longitude' => 75.7595082999999931416823528707027435302734375,
                            ),
                        'placeId' => 'ChIJfTEwDAi1bTkRbrSHT9epz98',
                    ),
                90 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8570021999999966055838740430772304534912109375,
                                'longitude' => 75.7594323000000002821252564899623394012451171875,
                            ),
                        'placeId' => 'ChIJfTEwDAi1bTkRbrSHT9epz98',
                    ),
                91 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856726499999997059831002843566238880157470703125,
                                'longitude' => 75.7591073999999906618540990166366100311279296875,
                            ),
                        'originalIndex' => 9,
                        'placeId' => 'ChIJfTEwDAi1bTkRbrSHT9epz98',
                    ),
                92 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856726499999997059831002843566238880157470703125,
                                'longitude' => 75.7591073999999906618540990166366100311279296875,
                            ),
                        'placeId' => 'ChIJj_GdEgi1bTkRxXe_ygAL90M',
                    ),
                93 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856654500000001206672095577232539653778076171875,
                                'longitude' => 75.7590327999999999519786797463893890380859375,
                            ),
                        'placeId' => 'ChIJj_GdEgi1bTkRxXe_ygAL90M',
                    ),
                94 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856654500000001206672095577232539653778076171875,
                                'longitude' => 75.7590327999999999519786797463893890380859375,
                            ),
                        'placeId' => 'ChIJG1EwbQi1bTkROcGmpwod6AI',
                    ),
                95 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856448300000000273257683147676289081573486328125,
                                'longitude' => 75.758799799999991364529705606400966644287109375,
                            ),
                        'placeId' => 'ChIJG1EwbQi1bTkROcGmpwod6AI',
                    ),
                96 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.856448300000000273257683147676289081573486328125,
                                'longitude' => 75.758799799999991364529705606400966644287109375,
                            ),
                        'placeId' => 'ChIJTbpRbAi1bTkRDdZKgenOlZE',
                    ),
                97 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85637779999999708024915889836847782135009765625,
                                'longitude' => 75.75871599999999261854100041091442108154296875,
                            ),
                        'placeId' => 'ChIJTbpRbAi1bTkRDdZKgenOlZE',
                    ),
                98 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85637779999999708024915889836847782135009765625,
                                'longitude' => 75.75871599999999261854100041091442108154296875,
                            ),
                        'placeId' => 'ChIJARRnawi1bTkRYypyAmgO-5g',
                    ),
                99 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85613629999999574238245259039103984832763671875,
                                'longitude' => 75.758983599999993430174072273075580596923828125,
                            ),
                        'placeId' => 'ChIJARRnawi1bTkRYypyAmgO-5g',
                    ),
                100 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85613629999999574238245259039103984832763671875,
                                'longitude' => 75.758983599999993430174072273075580596923828125,
                            ),
                        'placeId' => 'ChIJtaguOwi1bTkR_371VYrAVNI',
                    ),
                101 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8549964119126940431669936515390872955322265625,
                                'longitude' => 75.7602578606866501331751351244747638702392578125,
                            ),
                        'originalIndex' => 10,
                        'placeId' => 'ChIJtaguOwi1bTkR_371VYrAVNI',
                    ),
                102 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.854903699999997712666299776174128055572509765625,
                                'longitude' => 75.7603615000000019108483684249222278594970703125,
                            ),
                        'placeId' => 'ChIJtaguOwi1bTkR_371VYrAVNI',
                    ),
                103 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.854903699999997712666299776174128055572509765625,
                                'longitude' => 75.7603615000000019108483684249222278594970703125,
                            ),
                        'placeId' => 'ChIJed8ef6e1bTkR7wEmzVdftXs',
                    ),
                104 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.854506400000001775651981006376445293426513671875,
                                'longitude' => 75.7608139000000164742232300341129302978515625,
                            ),
                        'placeId' => 'ChIJed8ef6e1bTkR7wEmzVdftXs',
                    ),
                105 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8542647999999957164618535898625850677490234375,
                                'longitude' => 75.7610316999999895415385253727436065673828125,
                            ),
                        'placeId' => 'ChIJed8ef6e1bTkR7wEmzVdftXs',
                    ),
                106 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8542647999999957164618535898625850677490234375,
                                'longitude' => 75.7610316999999895415385253727436065673828125,
                            ),
                        'placeId' => 'ChIJx04Saae1bTkR0THJC4v83lI',
                    ),
                107 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.854008799999999013152773841284215450286865234375,
                                'longitude' => 75.761209100000002081287675537168979644775390625,
                            ),
                        'placeId' => 'ChIJx04Saae1bTkR0THJC4v83lI',
                    ),
                108 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.853874899999997438726495602168142795562744140625,
                                'longitude' => 75.761279599999994616155163384974002838134765625,
                            ),
                        'placeId' => 'ChIJx04Saae1bTkR0THJC4v83lI',
                    ),
                109 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8537012000000032685420592315495014190673828125,
                                'longitude' => 75.7613654999999965866663842462003231048583984375,
                            ),
                        'placeId' => 'ChIJx04Saae1bTkR0THJC4v83lI',
                    ),
                110 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.852860099999997345321389730088412761688232421875,
                                'longitude' => 75.7617475999999925306838122196495532989501953125,
                            ),
                        'placeId' => 'ChIJx04Saae1bTkR0THJC4v83lI',
                    ),
                111 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.852860099999997345321389730088412761688232421875,
                                'longitude' => 75.7617475999999925306838122196495532989501953125,
                            ),
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                112 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.851823499999998290377334342338144779205322265625,
                                'longitude' => 75.76221839999999474457581527531147003173828125,
                            ),
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                113 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.851498124878606432730521191842854022979736328125,
                                'longitude' => 75.7623766483746834410339943133294582366943359375,
                            ),
                        'originalIndex' => 11,
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                114 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8513470999999981358996592462062835693359375,
                                'longitude' => 75.762450099999995245525497011840343475341796875,
                            ),
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                115 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850936499999999540477801929228007793426513671875,
                                'longitude' => 75.7626594999999980473148752935230731964111328125,
                            ),
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                116 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8504760000000004538378561846911907196044921875,
                                'longitude' => 75.762858499999993000528775155544281005859375,
                            ),
                        'placeId' => 'ChIJgZkYzKC1bTkRnwo0GzY4fwk',
                    ),
                117 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8504760000000004538378561846911907196044921875,
                                'longitude' => 75.762858499999993000528775155544281005859375,
                            ),
                        'placeId' => 'ChIJUTna5qC1bTkRQT0y02gQrXk',
                    ),
                118 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8503455000000030850060284137725830078125,
                                'longitude' => 75.7629184999999978344931150786578655242919921875,
                            ),
                        'placeId' => 'ChIJUTna5qC1bTkRQT0y02gQrXk',
                    ),
                119 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8503455000000030850060284137725830078125,
                                'longitude' => 75.7629184999999978344931150786578655242919921875,
                            ),
                        'placeId' => 'ChIJBxyT5qC1bTkRt3oXUH6wSHY',
                    ),
                120 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85027939999999802012098371051251888275146484375,
                                'longitude' => 75.762720700000016904596122913062572479248046875,
                            ),
                        'placeId' => 'ChIJBxyT5qC1bTkRt3oXUH6wSHY',
                    ),
                121 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85027939999999802012098371051251888275146484375,
                                'longitude' => 75.762720700000016904596122913062572479248046875,
                            ),
                        'placeId' => 'ChIJlXsY6aC1bTkRtoAuOtOQi9c',
                    ),
                122 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85026759999999512729118578135967254638671875,
                                'longitude' => 75.762502799999992930679582059383392333984375,
                            ),
                        'placeId' => 'ChIJlXsY6aC1bTkRtoAuOtOQi9c',
                    ),
                123 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85027518348106667644970002584159374237060546875,
                                'longitude' => 75.76240752079684170894324779510498046875,
                            ),
                        'originalIndex' => 12,
                        'placeId' => 'ChIJlXsY6aC1bTkRtoAuOtOQi9c',
                    ),
                124 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85028319999999979472704580985009670257568359375,
                                'longitude' => 75.7623067999999904031938058324158191680908203125,
                            ),
                        'placeId' => 'ChIJlXsY6aC1bTkRtoAuOtOQi9c',
                    ),
                125 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85032939999999967994881444610655307769775390625,
                                'longitude' => 75.7619466000000016947524272836744785308837890625,
                            ),
                        'placeId' => 'ChIJlXsY6aC1bTkRtoAuOtOQi9c',
                    ),
                126 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85032939999999967994881444610655307769775390625,
                                'longitude' => 75.7619466000000016947524272836744785308837890625,
                            ),
                        'placeId' => 'ChIJw23dl6C1bTkRE0MkBAwGvNQ',
                    ),
                127 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850424600000000197042027139104902744293212890625,
                                'longitude' => 75.76078799999999091596691869199275970458984375,
                            ),
                        'placeId' => 'ChIJw23dl6C1bTkRE0MkBAwGvNQ',
                    ),
                128 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850449999999995043253875337541103363037109375,
                                'longitude' => 75.7605410999999975274477037601172924041748046875,
                            ),
                        'placeId' => 'ChIJw23dl6C1bTkRE0MkBAwGvNQ',
                    ),
                129 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850449999999995043253875337541103363037109375,
                                'longitude' => 75.7605410999999975274477037601172924041748046875,
                            ),
                        'placeId' => 'ChIJ-1AOCwq1bTkRgUMwSA61deg',
                    ),
                130 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8504795823236008800449781119823455810546875,
                                'longitude' => 75.7599738251970649116628919728100299835205078125,
                            ),
                        'originalIndex' => 13,
                        'placeId' => 'ChIJ-1AOCwq1bTkRgUMwSA61deg',
                    ),
                131 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85048630000000002837623469531536102294921875,
                                'longitude' => 75.7598449999999985493559506721794605255126953125,
                            ),
                        'placeId' => 'ChIJ-1AOCwq1bTkRgUMwSA61deg',
                    ),
                132 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85048630000000002837623469531536102294921875,
                                'longitude' => 75.7598449999999985493559506721794605255126953125,
                            ),
                        'placeId' => 'ChIJvRuIDQq1bTkRLmmjg0qoL_s',
                    ),
                133 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850513899999999267720340867526829242706298828125,
                                'longitude' => 75.759516800000000102954800240695476531982421875,
                            ),
                        'placeId' => 'ChIJvRuIDQq1bTkRLmmjg0qoL_s',
                    ),
                134 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850513899999999267720340867526829242706298828125,
                                'longitude' => 75.759516800000000102954800240695476531982421875,
                            ),
                        'placeId' => 'ChIJcUbsEwq1bTkRWspBunTmMo0',
                    ),
                135 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85053769999999673245838494040071964263916015625,
                                'longitude' => 75.759234899999995604957803152501583099365234375,
                            ),
                        'placeId' => 'ChIJcUbsEwq1bTkRWspBunTmMo0',
                    ),
                136 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85053769999999673245838494040071964263916015625,
                                'longitude' => 75.759234899999995604957803152501583099365234375,
                            ),
                        'placeId' => 'ChIJU6__FQq1bTkRzSCst0dGYkI',
                    ),
                137 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85055849999999821875462657772004604339599609375,
                                'longitude' => 75.758759900000001152875483967363834381103515625,
                            ),
                        'placeId' => 'ChIJU6__FQq1bTkRzSCst0dGYkI',
                    ),
                138 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85055849999999821875462657772004604339599609375,
                                'longitude' => 75.758759900000001152875483967363834381103515625,
                            ),
                        'placeId' => 'ChIJaXvBOwq1bTkRJk3whb3-AXM',
                    ),
                139 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8505626000000034991899156011641025543212890625,
                                'longitude' => 75.758628899999990835567587055265903472900390625,
                            ),
                        'placeId' => 'ChIJaXvBOwq1bTkRJk3whb3-AXM',
                    ),
                140 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850580199999999564397512585856020450592041015625,
                                'longitude' => 75.758265399999999090141500346362590789794921875,
                            ),
                        'placeId' => 'ChIJaXvBOwq1bTkRJk3whb3-AXM',
                    ),
                141 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850580199999999564397512585856020450592041015625,
                                'longitude' => 75.758265399999999090141500346362590789794921875,
                            ),
                        'placeId' => 'ChIJ9WD8MAq1bTkRDgSEmKR-Orw',
                    ),
                142 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85062229999999772189767099916934967041015625,
                                'longitude' => 75.7578826000000020712832338176667690277099609375,
                            ),
                        'placeId' => 'ChIJ9WD8MAq1bTkRDgSEmKR-Orw',
                    ),
                143 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85062229999999772189767099916934967041015625,
                                'longitude' => 75.7578826000000020712832338176667690277099609375,
                            ),
                        'placeId' => 'ChIJc_TBMgq1bTkRdnO8f6USB5c',
                    ),
                144 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85063799999999645251591573469340801239013671875,
                                'longitude' => 75.75772499999999354258761741220951080322265625,
                            ),
                        'placeId' => 'ChIJc_TBMgq1bTkRdnO8f6USB5c',
                    ),
                145 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850665420313003295404996606521308422088623046875,
                                'longitude' => 75.757543152299007260808139108121395111083984375,
                            ),
                        'originalIndex' => 14,
                        'placeId' => 'ChIJc_TBMgq1bTkRdnO8f6USB5c',
                    ),
                146 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850703199999998105340637266635894775390625,
                                'longitude' => 75.757292599999999538340489380061626434326171875,
                            ),
                        'placeId' => 'ChIJc_TBMgq1bTkRdnO8f6USB5c',
                    ),
                147 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850703199999998105340637266635894775390625,
                                'longitude' => 75.757292599999999538340489380061626434326171875,
                            ),
                        'placeId' => 'ChIJC8sa0Au1bTkRo3CInXWBTNM',
                    ),
                148 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8507713999999992893208400346338748931884765625,
                                'longitude' => 75.756683100000003605600795708596706390380859375,
                            ),
                        'placeId' => 'ChIJC8sa0Au1bTkRo3CInXWBTNM',
                    ),
                149 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850770200000003029572326340712606906890869140625,
                                'longitude' => 75.7565888000000171587089425884187221527099609375,
                            ),
                        'placeId' => 'ChIJC8sa0Au1bTkRo3CInXWBTNM',
                    ),
                150 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850758200000001352236722595989704132080078125,
                                'longitude' => 75.75649179999999205392668955028057098388671875,
                            ),
                        'placeId' => 'ChIJC8sa0Au1bTkRo3CInXWBTNM',
                    ),
                151 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850730299999998607063389499671757221221923828125,
                                'longitude' => 75.7563439999999985730028129182755947113037109375,
                            ),
                        'placeId' => 'ChIJC8sa0Au1bTkRo3CInXWBTNM',
                    ),
                152 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850730299999998607063389499671757221221923828125,
                                'longitude' => 75.7563439999999985730028129182755947113037109375,
                            ),
                        'placeId' => 'ChIJM5Yf3Qu1bTkRYdeoTfXe5Js',
                    ),
                153 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850742499999999068904799059964716434478759765625,
                                'longitude' => 75.756094799999999622741597704589366912841796875,
                            ),
                        'placeId' => 'ChIJM5Yf3Qu1bTkRYdeoTfXe5Js',
                    ),
                154 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850742499999999068904799059964716434478759765625,
                                'longitude' => 75.756094799999999622741597704589366912841796875,
                            ),
                        'placeId' => 'ChIJz4FN5gu1bTkRdzw6lrzN8yc',
                    ),
                155 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850765100000000273894329438917338848114013671875,
                                'longitude' => 75.7556311000000022204403649084270000457763671875,
                            ),
                        'placeId' => 'ChIJz4FN5gu1bTkRdzw6lrzN8yc',
                    ),
                156 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850765100000000273894329438917338848114013671875,
                                'longitude' => 75.7556311000000022204403649084270000457763671875,
                            ),
                        'placeId' => 'ChIJmXfd5Au1bTkRDadQI4oQqCI',
                    ),
                157 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850773799999995361531546222977340221405029296875,
                                'longitude' => 75.755472099999991542063071392476558685302734375,
                            ),
                        'placeId' => 'ChIJmXfd5Au1bTkRDadQI4oQqCI',
                    ),
                158 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850779636063403899015611386857926845550537109375,
                                'longitude' => 75.7553876566015986782076652161777019500732421875,
                            ),
                        'originalIndex' => 15,
                        'placeId' => 'ChIJmXfd5Au1bTkRDadQI4oQqCI',
                    ),
                159 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850793399999997035365595365874469280242919921875,
                                'longitude' => 75.755188500000002704837243072688579559326171875,
                            ),
                        'placeId' => 'ChIJmXfd5Au1bTkRDadQI4oQqCI',
                    ),
                160 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850793399999997035365595365874469280242919921875,
                                'longitude' => 75.755188500000002704837243072688579559326171875,
                            ),
                        'placeId' => 'ChIJO8Hj-wu1bTkRcy3KxIHEdfU',
                    ),
                161 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85085819999999756646502646617591381072998046875,
                                'longitude' => 75.75475629999999682695488445460796356201171875,
                            ),
                        'placeId' => 'ChIJO8Hj-wu1bTkRcy3KxIHEdfU',
                    ),
                162 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85085819999999756646502646617591381072998046875,
                                'longitude' => 75.75475629999999682695488445460796356201171875,
                            ),
                        'placeId' => 'ChIJk_7S-Au1bTkRtsn0jeRnbic',
                    ),
                163 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85081439999999730616764281876385211944580078125,
                                'longitude' => 75.7547210999999975911123328842222690582275390625,
                            ),
                        'placeId' => 'ChIJk_7S-Au1bTkRtsn0jeRnbic',
                    ),
                164 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85081439999999730616764281876385211944580078125,
                                'longitude' => 75.7547210999999975911123328842222690582275390625,
                            ),
                        'placeId' => 'ChIJrb_qBwy1bTkRbBbONCWlT7A',
                    ),
                165 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850280400000002600791049189865589141845703125,
                                'longitude' => 75.7542911999999972749719745479524135589599609375,
                            ),
                        'placeId' => 'ChIJrb_qBwy1bTkRbBbONCWlT7A',
                    ),
                166 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850280400000002600791049189865589141845703125,
                                'longitude' => 75.7542911999999972749719745479524135589599609375,
                            ),
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                167 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.850139099999996261658452567644417285919189453125,
                                'longitude' => 75.754179499999992231096257455646991729736328125,
                            ),
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                168 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.85001510000000024547262000851333141326904296875,
                                'longitude' => 75.75407699999999522333382628858089447021484375,
                            ),
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                169 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.849913199999999591227606288157403469085693359375,
                                'longitude' => 75.753989899999993440360412932932376861572265625,
                            ),
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                170 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.849557111911980911145292338915169239044189453125,
                                'longitude' => 75.75367498333270077637280337512493133544921875,
                            ),
                        'originalIndex' => 16,
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                171 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.849523999999998835619408055208623409271240234375,
                                'longitude' => 75.7536456999999927575117908418178558349609375,
                            ),
                        'placeId' => 'ChIJz2q5DQy1bTkRs2Z4VkzwWQo',
                    ),
                172 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.849523999999998835619408055208623409271240234375,
                                'longitude' => 75.7536456999999927575117908418178558349609375,
                            ),
                        'placeId' => 'ChIJmVL0bAy1bTkRDUk8U_ZNJ3w',
                    ),
                173 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848952499999999332658262574113905429840087890625,
                                'longitude' => 75.75312900000000126965460367500782012939453125,
                            ),
                        'placeId' => 'ChIJmVL0bAy1bTkRDUk8U_ZNJ3w',
                    ),
                174 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848952499999999332658262574113905429840087890625,
                                'longitude' => 75.75312900000000126965460367500782012939453125,
                            ),
                        'placeId' => 'ChIJp82xQgy1bTkRLEyE09eEpEY',
                    ),
                175 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848869699999998061912265256978571414947509765625,
                                'longitude' => 75.7530455999999929872501525096595287322998046875,
                            ),
                        'placeId' => 'ChIJp82xQgy1bTkRLEyE09eEpEY',
                    ),
                176 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848869699999998061912265256978571414947509765625,
                                'longitude' => 75.7530455999999929872501525096595287322998046875,
                            ),
                        'placeId' => 'ChIJ4_HXXAy1bTkRHelFHOXQFsI',
                    ),
                177 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848644799999998866724126855842769145965576171875,
                                'longitude' => 75.7528822000000019443177734501659870147705078125,
                            ),
                        'placeId' => 'ChIJ4_HXXAy1bTkRHelFHOXQFsI',
                    ),
                178 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848644799999998866724126855842769145965576171875,
                                'longitude' => 75.7528822000000019443177734501659870147705078125,
                            ),
                        'placeId' => 'ChIJYdXiWwy1bTkRFX8g6cWNTsM',
                    ),
                179 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84821939999999784731699037365615367889404296875,
                                'longitude' => 75.752612400000003844979801215231418609619140625,
                            ),
                        'placeId' => 'ChIJYdXiWwy1bTkRFX8g6cWNTsM',
                    ),
                180 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84821939999999784731699037365615367889404296875,
                                'longitude' => 75.752612400000003844979801215231418609619140625,
                            ),
                        'placeId' => 'ChIJvVtsWAy1bTkRge8HbplSXxM',
                    ),
                181 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848008699999997617169356090016663074493408203125,
                                'longitude' => 75.7524734999999935780579107813537120819091796875,
                            ),
                        'placeId' => 'ChIJvVtsWAy1bTkRge8HbplSXxM',
                    ),
                182 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.848008699999997617169356090016663074493408203125,
                                'longitude' => 75.7524734999999935780579107813537120819091796875,
                            ),
                        'placeId' => 'ChIJfWEu-Ay1bTkRNF5NSev8Xwk',
                    ),
                183 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847760099999998573139237123541533946990966796875,
                                'longitude' => 75.752299399999998286148183979094028472900390625,
                            ),
                        'placeId' => 'ChIJfWEu-Ay1bTkRNF5NSev8Xwk',
                    ),
                184 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847760099999998573139237123541533946990966796875,
                                'longitude' => 75.752299399999998286148183979094028472900390625,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                185 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8477136999999999034116626717150211334228515625,
                                'longitude' => 75.7522613000000006877598934806883335113525390625,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                186 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847667200000000065074345911853015422821044921875,
                                'longitude' => 75.75221809999999322826624847948551177978515625,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                187 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84759150000000005320544005371630191802978515625,
                                'longitude' => 75.75214280000000144354999065399169921875,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                188 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84753599272728052937964093871414661407470703125,
                                'longitude' => 75.7520926946954205050133168697357177734375,
                            ),
                        'originalIndex' => 17,
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                189 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847520599999999291185304173268377780914306640625,
                                'longitude' => 75.75207879999999249776010401546955108642578125,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                190 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84744789999999881047187955118715763092041015625,
                                'longitude' => 75.752017999999992525772540830075740814208984375,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                191 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847391699999999303827280527912080287933349609375,
                                'longitude' => 75.751979599999998526982381008565425872802734375,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                192 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84730929999999915480657364241778850555419921875,
                                'longitude' => 75.751938400000000228828866966068744659423828125,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                193 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847028800000003911918611265718936920166015625,
                                'longitude' => 75.7518194999999963101799949072301387786865234375,
                            ),
                        'placeId' => 'ChIJIQ98-wy1bTkRnqRSKx6Zupo',
                    ),
                194 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.847028800000003911918611265718936920166015625,
                                'longitude' => 75.7518194999999963101799949072301387786865234375,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                195 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846894400000000047157300286926329135894775390625,
                                'longitude' => 75.751776100000000724321580491960048675537109375,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                196 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846881100000000941463440540246665477752685546875,
                                'longitude' => 75.751769899999999324791133403778076171875,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                197 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846865599999997442637322819791734218597412109375,
                                'longitude' => 75.75176010000001269872882403433322906494140625,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                198 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8468361999999984845999279059469699859619140625,
                                'longitude' => 75.7517327999999992016455507837235927581787109375,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                199 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846827200000003443847162998281419277191162109375,
                                'longitude' => 75.7517203999999964025846566073596477508544921875,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                200 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846815799999998120028976700268685817718505859375,
                                'longitude' => 75.751691899999997303893906064331531524658203125,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                201 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846810699999995364350979798473417758941650390625,
                                'longitude' => 75.7516762999999997418854036368429660797119140625,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                202 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846809600000000273212208412587642669677734375,
                                'longitude' => 75.7516681000000033918695407919585704803466796875,
                            ),
                        'placeId' => 'ChIJndv24Qy1bTkR3jYQGxKgpdQ',
                    ),
                203 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846809600000000273212208412587642669677734375,
                                'longitude' => 75.7516681000000033918695407919585704803466796875,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                204 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846806999999994758354660007171332836151123046875,
                                'longitude' => 75.7516323999999912075509200803935527801513671875,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                205 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8468193000000070469468482770025730133056640625,
                                'longitude' => 75.7514341999999913923602434806525707244873046875,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                206 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846816600000000363479557563550770282745361328125,
                                'longitude' => 75.75140129999999771825969219207763671875,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                207 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846809900000000226327756536193192005157470703125,
                                'longitude' => 75.7513675999999946952812024392187595367431640625,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                208 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846805299999999760984792374074459075927734375,
                                'longitude' => 75.751356200000003582317731343209743499755859375,
                            ),
                        'placeId' => 'ChIJAVheHg21bTkRmAuepKPJTQs',
                    ),
                209 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846805299999999760984792374074459075927734375,
                                'longitude' => 75.751356200000003582317731343209743499755859375,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                210 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846785399999998134035195107571780681610107421875,
                                'longitude' => 75.7513124999999973852027324028313159942626953125,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                211 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.8467531000000008134520612657070159912109375,
                                'longitude' => 75.7512540999999970381395542062819004058837890625,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                212 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84673439999999544625097769312560558319091796875,
                                'longitude' => 75.7512244999999921901689958758652210235595703125,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                213 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846688769973763299958591233007609844207763671875,
                                'longitude' => 75.751165421714176773093640804290771484375,
                            ),
                        'originalIndex' => 18,
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                214 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846656700000000483896656078286468982696533203125,
                                'longitude' => 75.7511238999999960697095957584679126739501953125,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                215 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846461599999994263043845421634614467620849609375,
                                'longitude' => 75.7508878999999950565324979834258556365966796875,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                216 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846400100000000321642801281996071338653564453125,
                                'longitude' => 75.7508047000000033222022466361522674560546875,
                            ),
                        'placeId' => 'ChIJK7gbGA21bTkRhC0rpDBwsAQ',
                    ),
                217 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846400100000000321642801281996071338653564453125,
                                'longitude' => 75.7508047000000033222022466361522674560546875,
                            ),
                        'placeId' => 'ChIJEyJ8Pg21bTkRinUP-E0kYUI',
                    ),
                218 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846286899999999064903022372163832187652587890625,
                                'longitude' => 75.7506574000000085788997239433228969573974609375,
                            ),
                        'placeId' => 'ChIJEyJ8Pg21bTkRinUP-E0kYUI',
                    ),
                219 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846097300000000274167177849449217319488525390625,
                                'longitude' => 75.7504508999999899288013693876564502716064453125,
                            ),
                        'placeId' => 'ChIJEyJ8Pg21bTkRinUP-E0kYUI',
                    ),
                220 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846072799999998181874616420827805995941162109375,
                                'longitude' => 75.750428599999992229641065932810306549072265625,
                            ),
                        'placeId' => 'ChIJEyJ8Pg21bTkRinUP-E0kYUI',
                    ),
                221 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.846072799999998181874616420827805995941162109375,
                                'longitude' => 75.750428599999992229641065932810306549072265625,
                            ),
                        'placeId' => 'ChIJz9LvOA21bTkRPNAGONlA_M0',
                    ),
                222 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845882300000003084505806327797472476959228515625,
                                'longitude' => 75.7502641999999895006112637929618358612060546875,
                            ),
                        'placeId' => 'ChIJz9LvOA21bTkRPNAGONlA_M0',
                    ),
                223 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845882300000003084505806327797472476959228515625,
                                'longitude' => 75.7502641999999895006112637929618358612060546875,
                            ),
                        'placeId' => 'ChIJIyXkRw21bTkRtuRmQvB3oUE',
                    ),
                224 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845639500000000765567165217362344264984130859375,
                                'longitude' => 75.7500400999999925488737062551081180572509765625,
                            ),
                        'placeId' => 'ChIJIyXkRw21bTkRtuRmQvB3oUE',
                    ),
                225 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845639500000000765567165217362344264984130859375,
                                'longitude' => 75.7500400999999925488737062551081180572509765625,
                            ),
                        'placeId' => 'ChIJ6fyNSA21bTkRyTnq6DVHleM',
                    ),
                226 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845576799999999906276570982299745082855224609375,
                                'longitude' => 75.7499802999999900521288509480655193328857421875,
                            ),
                        'placeId' => 'ChIJ6fyNSA21bTkRyTnq6DVHleM',
                    ),
                227 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845576799999999906276570982299745082855224609375,
                                'longitude' => 75.7499802999999900521288509480655193328857421875,
                            ),
                        'placeId' => 'ChIJPcihTg21bTkRgXheM-qNYbE',
                    ),
                228 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84531829999999530400600633583962917327880859375,
                                'longitude' => 75.7497729999999904748619883321225643157958984375,
                            ),
                        'placeId' => 'ChIJPcihTg21bTkRgXheM-qNYbE',
                    ),
                229 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845034800000004082676241523586213588714599609375,
                                'longitude' => 75.749579799999992246739566326141357421875,
                            ),
                        'placeId' => 'ChIJPcihTg21bTkRgXheM-qNYbE',
                    ),
                230 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.845034800000004082676241523586213588714599609375,
                                'longitude' => 75.749579799999992246739566326141357421875,
                            ),
                        'placeId' => 'ChIJgyeuUw21bTkRkx3hUvhyfgQ',
                    ),
                231 =>
                    array (
                        'location' =>
                            array (
                                'latitude' => 26.84504566624900689930655062198638916015625,
                                'longitude' => 75.7495395350199913764299708418548107147216796875,
                            ),
                        'originalIndex' => 19,
                        'placeId' => 'ChIJgyeuUw21bTkRkx3hUvhyfgQ',
                    ),
            ),
        'warningMessage' => 'Input path is too sparse. You should provide a path where consecutive points are closer to each other. Refer to the \'path\' parameter in Google Roads API documentation.',
    );
}