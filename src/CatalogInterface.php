<?php

declare(strict_types=1);

namespace AvaiBookSports\Component\RedsysMessages;

interface CatalogInterface
{
    const SIS_ERRORS = [
        'SIS0001' => '9001',
        'SIS0002' => '9002',
        'SIS0003' => '9003',
        'SIS0004' => '9004',
        'SIS0005' => '9005',
        'SIS0006' => '9006',
        'SIS0007' => '9007',
        'SIS0008' => '9008',
        'SIS0009' => '9009',
        'SIS0010' => '9010',
        'SIS0011' => '9011',
        'SIS0012' => '9012',
        'SIS0013' => '9013',
        'SIS0014' => '9014',
        'SIS0015' => '9015',
        'SIS0016' => '9016',
        'SIS0018' => '9018',
        'SIS0019' => '9019',
        'SIS0020' => '9020',
        'SIS0021' => '9021',
        'SIS0022' => '9022',
        'SIS0023' => '9023',
        'SIS0024' => '9024',
        'SIS0025' => '9025',
        'SIS0026' => '9026',
        'SIS0027' => '9027',
        'SIS0028' => '9028',
        'SIS0029' => '9029',
        'SIS0030' => '9030',
        'SIS0031' => '9031',
        'SIS0032' => '9032',
        'SIS0033' => '9033',
        'SIS0034' => '9034',
        'SIS0035' => '9035',
        'SIS0037' => '9037',
        'SIS0038' => '9038',
        'SIS0039' => '9039',
        'SIS0040' => '9040',
        'SIS0041' => '9041',
        'SIS0042' => '9042',
        'SIS0043' => '9043',
        'SIS0044' => '9044',
        'SIS0046' => '9046',
        'SIS0047' => '9047',
        'SIS0048' => '9048',
        'SIS0049' => '9049',
        'SIS0050' => '9050',
        'SIS0051' => '9051',
        'SIS0052' => '9052',
        'SIS0053' => '9053',
        'SIS0054' => '9054',
        'SIS0055' => '9055',
        'SIS0056' => '9056',
        'SIS0057' => '9057',
        'SIS0058' => '9058',
        'SIS0059' => '9059',
        'SIS0060' => '9060',
        'SIS0061' => '9061',
        'SIS0062' => '9062',
        'SIS0063' => '9063',
        'SIS0064' => '9064',
        'SIS0065' => '9065',
        'SIS0066' => '9066',
        'SIS0067' => '9067',
        'SIS0068' => '9068',
        'SIS0069' => '9069',
        'SIS0070' => '9070',
        'SIS0071' => '9071',
        'SIS0072' => '9072',
        'SIS0073' => '9073',
        'SIS0074' => '9074',
        'SIS0075' => '9075',
        'SIS0077' => '9077',
        'SIS0078' => '9078',
        'SIS0079' => '9079',
        'SIS0080' => '9080',
        'SIS0081' => '9081',
        'SIS0082' => '9082',
        'SIS0083' => '9083',
        'SIS0084' => '9084',
        'SIS0085' => '9085',
        'SIS0086' => '9086',
        'SIS0087' => '9087',
        'SIS0088' => '9088',
        'SIS0089' => '9089',
        'SIS0090' => '9090',
        'SIS0091' => '9091',
        'SIS0092' => '9092',
        'SIS0093' => '9093',
        'SIS0094' => '9094',
        'SIS0095' => '9095',
        'SIS0096' => '9096',
        'SIS0097' => '9097',
        'SIS0098' => '9098',
        'SIS0099' => '9099',
        'SIS0103' => '9103',
        'SIS0104' => '9104',
        'SIS0112' => '9112',
        'SIS0113' => '9113',
        'SIS0114' => '9114',
        'SIS0115' => '9115',
        'SIS0116' => '9116',
        'SIS0117' => '9117',
        'SIS0118' => '9118',
        'SIS0119' => '9119',
        'SIS0120' => '9120',
        'SIS0121' => '9121',
        'SIS0122' => '9122',
        'SIS0123' => '9123',
        'SIS0124' => '9124',
        'SIS0125' => '9125',
        'SIS0126' => '9126',
        'SIS0127' => '9127',
        'SIS0128' => '9128',
        'SIS0129' => '9129',
        'SIS0130' => '9130',
        'SIS0131' => '9131',
        'SIS0132' => '9132',
        'SIS0133' => '9133',
        'SIS0134' => '9134',
        'SIS0135' => '9135',
        'SIS0136' => '9136',
        'SIS0137' => '9137',
        'SIS0138' => '9138',
        'SIS0139' => '9139',
        'SIS0140' => '9140',
        'SIS0141' => '9141',
        'SIS0142' => '9142',
        'SIS0151' => '9151',
        'SIS0169' => '9169',
        'SIS0170' => '9170',
        'SIS0171' => '9171',
        'SIS0172' => '9172',
        'SIS0173' => '9173',
        'SIS0174' => '9174',
        'SIS0175' => '9175',
        'SIS0181' => '9181',
        'SIS0182' => '9182',
        'SIS0183' => '9183',
        'SIS0184' => '9184',
        'SIS0186' => '9186',
        'SIS0187' => '9187',
        'SIS0197' => '9197',
        'SIS0214' => '9214',
        'SIS0216' => '9216',
        'SIS0217' => '9217',
        'SIS0218' => '9218',
        'SIS0219' => '9219',
        'SIS0220' => '9220',
        'SIS0221' => '9221',
        'SIS0222' => '9222',
        'SIS0223' => '9223',
        'SIS0224' => '9224',
        'SIS0225' => '9225',
        'SIS0226' => '9226',
        'SIS0227' => '9227',
        'SIS0228' => '9228',
        'SIS0229' => '9229',
        'SIS0230' => '9230',
        'SIS0231' => '9231',
        'SIS0232' => '9232',
        'SIS0233' => '9233',
        'SIS0234' => '9234',
        'SIS0235' => '9235',
        'SIS0236' => '9236',
        'SIS0237' => '9237',
        'SIS0238' => '9238',
        'SIS0239' => '9239',
        'SIS0240' => '9240',
        'SIS0241' => '9241',
        'SIS0242' => '9242',
        'SIS0243' => '9243',
        'SIS0244' => '9244',
        'SIS0245' => '9245',
        'SIS0246' => '9246',
        'SIS0247' => '9247',
        'SIS0248' => '9248',
        'SIS0249' => '9249',
        'SIS0250' => '9250',
        'SIS0251' => '9251',
        'SIS0252' => '9252',
        'SIS0253' => '9253',
        'SIS0254' => '9254',
        'SIS0255' => '9255',
        'SIS0256' => '9256',
        'SIS0257' => '9257',
        'SIS0258' => '9258',
        'SIS0259' => '9259',
        'SIS0260' => '9260',
        'SIS0261' => '9261',
        'SIS0262' => '9262',
        'SIS0263' => '9263',
        'SIS0264' => '9264',
        'SIS0265' => '9265',
        'SIS0266' => '9266',
        'SIS0267' => '9267',
        'SIS02648' => '9268',
        'SIS0269' => '9269',
        'SIS0270' => '9270',
        'SIS0274' => '9274',
        'SIS0275' => '9275',
        'SIS0276' => '9276',
        'SIS0277' => '9277',
        'SIS0278' => '9278',
        'SIS0279' => '9279',
        'SIS0280' => '9280',
        'SIS0281' => '9281',
        'SIS0282' => '9282',
        'SIS0283' => '9283',
        'SIS0284' => '9284',
        'SIS0285' => '9285',
        'SIS0286' => '9286',
        'SIS0287' => '9287',
        'SIS0288' => '9288',
        'SIS0289' => '9289',
        'SIS0290' => '9290',
        'SIS0291' => '9291',
        'SIS0292' => '9292',
        'SIS0293' => '9293',
        'SIS0294' => '9294',
        'SIS0295' => '9295',
        'SIS0296' => '9296',
        'SIS0297' => '9297',
        'SIS0298' => '9298',
        'SIS0299' => '9299',
        'SIS0300' => '9300',
        'SIS0301' => '9301',
        'SIS0302' => '9302',
        'SIS0304' => '9304',
        'SIS0305' => '9305',
        'SIS0306' => '9306',
        'SIS0307' => '9307',
        'SIS0308' => '9308',
        'SIS0309' => '9309',
        'SIS0310' => '9310',
        'SIS0311' => '9311',
        'SIS0319' => '9319',
        'SIS0320' => '9320',
        'SIS0321' => '9321',
        'SIS0322' => '9322',
        'SIS0323' => '9323',
        'SIS0324' => '9324',
        'SIS0326' => '9326',
        'SIS0327' => '9327',
        'SIS0328' => '9328',
        'SIS0329' => '9329',
        'SIS0330' => '9330',
        'SIS0331' => '9331',
        'SIS0332' => '9332',
        'SIS0333' => '9333',
        'SIS0334' => '9334',
        'SIS0335' => '9335',
        'SIS0336' => '9336',
        'SIS0337' => '9337',
        'SIS0338' => '9338',
        'SIS0339' => '9339',
        'SIS0340' => '9340',
        'SIS0341' => '9341',
        'SIS0342' => '9342',
        'SIS0343' => '9343',
        'SIS0344' => '9344',
        'SIS0345' => '9345',
        'SIS0346' => '9346',
        'SIS0347' => '9347',
        'SIS0348' => '9348',
        'SIS0349' => '9349',
        'SIS0350' => '9350',
        'SIS0351' => '9351',
        'SIS0352' => '9352',
        'SIS0353' => '9353',
        'SIS0354' => '9354',
        'SIS0355' => '9355',
        'SIS0356' => '9356',
        'SIS0357' => '9357',
        'SIS0358' => '9358',
        'SIS0359' => '9359',
        'SIS0370' => '9370',
        'SIS0371' => '9371',
        'SIS0372' => '9372',
        'SIS0373' => '9373',
        'SIS0374' => '9374',
        'SIS0375' => '9375',
        'SIS0376' => '9376',
        'SIS0377' => '9377',
        'SIS0378' => '9378',
        'SIS0379' => '9379',
        'SIS0380' => '9380',
        'SIS0381' => '9381',
        'SIS0382' => '9382',
        'SIS0383' => '9383',
        'SIS0384' => '9384',
        'SIS0385' => '9385',
        'SIS0386' => '9386',
        'SIS0387' => '9387',
        'SIS0388' => '9388',
        'SIS0389' => '9389',
        'SIS0390' => '9390',
        'SIS0391' => '9391',
        'SIS0392' => '9392',
        'SIS0393' => '9393',
        'SIS0394' => '9394',
        'SIS0395' => '9395',
        'SIS0396' => '9396',
        'SIS0397' => '9397',
        'SIS0398' => '9398',
        'SIS0399' => '9399',
        'SIS0400' => '9400',
        'SIS0401' => '9401',
        'SIS0402' => '9402',
        'SIS0403' => '9403',
        'SIS0404' => '9404',
        'SIS0405' => '9405',
        'SIS0406' => '9406',
        'SIS0407' => '9407',
        'SIS0408' => '9408',
        'SIS0409' => '9409',
        'SIS0410' => '9410',
        'SIS0411' => '9411',
        'SIS0412' => '9412',
        'SIS0413' => '9413',
        'SIS0414' => '9414',
        'SIS0415' => '9415',
        'SIS0416' => '9416',
        'SIS0417' => '9417',
        'SIS0418' => '9418',
        'SIS0419' => '9419',
        'SIS0420' => '9420',
        'SIS0421' => '9421',
        'SIS0422' => '9422',
        'SIS0423' => '9423',
        'SIS0424' => '9424',
        'SIS0425' => '9425',
        'SIS0426' => '9426',
        'SIS0427' => '9427',
        'SIS0428' => '9428',
        'SIS0429' => '9429',
        'SIS0430' => '9430',
        'SIS0431' => '9431',
        'SIS0432' => '9432',
        'SIS0433' => '9433',
        'SIS0434' => '9434',
        'SIS0435' => '9435',
        'SIS0436' => '9436',
        'SIS0437' => '9437',
        'SIS0438' => '9438',
        'SIS0439' => '9439',
        'SIS0440' => '9440',
        'SIS0441' => '9441',
        'SIS0442' => '9442',
        'SIS0443' => '9443',
        'SIS0444' => '9444',
        'SIS0445' => '9445',
        'SIS0446' => '9446',
        'SIS0447' => '9447',
        'SIS0448' => '9448',
        'SIS0449' => '9449',
        'SIS0450' => '9450',
        'SIS0451' => '9451',
        'SIS0453' => '9453',
        'SIS0454' => '9454',
        'SIS0455' => '9455',
        'SIS0456' => '9456',
        'SIS0457' => '9457',
        'SIS0458' => '9458',
        'SIS0459' => '9459',
        'SIS0460' => '9460',
        'SIS0461' => '9461',
        'SIS0462' => '9462',
        'SIS0463' => '9463',
        'SIS0464' => '9464',
        'SIS0465' => '9465',
        'SIS0466' => '9466',
        'SIS0467' => '9467',
        'SIS0468' => '9468',
        'SIS0469' => '9469',
        'SIS0470' => '9470',
        'SIS0471' => '9471',
        'SIS0472' => '9472',
        'SIS0473' => '9473',
        'SIS0474' => '9474',
        'SIS0475' => '9475',
        'SIS0476' => '9476',
        'SIS0477' => '9477',
        'SIS0478' => '9478',
        'SIS0479' => '9479',
        'SIS0480' => '9480',
        'SIS0481' => '9481',
        'SIS0482' => '9482',
        'SIS0483' => '9483',
        'SIS0484' => '9484',
        'SIS0485' => '9485',
        'SIS0486' => '9486',
        'SIS0487' => '9487',
        'SIS0488' => '9488',
        'SIS0489' => '9489',
        'SIS0490' => '9490',
        'SIS0491' => '9491',
        'SIS0492' => '9492',
        'SIS0493' => '9493',
        'SIS0494' => '9494',
        'SIS0495' => '9495',
        'SIS0496' => '9496',
        'SIS0497' => '9497',
        'SIS0498' => '9498',
        'SIS0499' => '9499',
        'SIS0500' => '9500',
        'SIS0501' => '9501',
        'SIS0502' => '9502',
        'SIS0503' => '9503',
        'SIS0504' => '9504',
        'SIS0505' => '9505',
        'SIS0506' => '9506',
        'SIS0507' => '9507',
        'SIS0508' => '9508',
        'SIS0510' => '9510',
        'SIS0511' => '9511',
        'SIS0515' => '9515',
        'SIS0516' => '9516',
        'SIS0517' => '9517',
        'SIS0518' => '9518',
        'SIS0519' => '9519',
        'SIS0520' => '9520',
        'SIS0521' => '9521',
        'SIS0522' => '9522',
        'SIS0523' => '9523',
        'SIS0524' => '9524',
        'SIS0525' => '9525',
        'SIS0526' => '9526',
        'SIS0527' => '9527',
        'SIS0528' => '9528',
        'SIS0529' => '9529',
        'SIS0530' => '9530',
        'SIS0531' => '9531',
        'SIS0532' => '9532',
        'SIS0533' => '9533',
        'SIS0534' => '9534',
        'SIS0535' => '9535',
        'SIS0536' => '9536',
        'SIS0537' => '9537',
        'SIS0538' => '9538',
        'SIS0539' => '9539',
        'SIS0540' => '9540',
        'SIS0541' => '9541',
        'SIS0542' => '9542',
        'SIS0543' => '9543',
        'SIS0544' => '9544',
        'SIS0545' => '9545',
        'SIS0546' => '9546',
        'SIS0547' => '9547',
        'SIS0548' => '9548',
        'SIS0549' => '9549',
        'SIS0550' => '9550',
        'SIS0551' => '9551',
        'SIS0552' => '9552',
        'SIS0553' => '9553',
        'SIS0554' => '9554',
        'SIS0555' => '9555',
        'SIS0556' => '9556',
        'SIS0557' => '9557',
        'SIS0558' => '9558',
        'SIS0559' => '9559',
        'SIS0560' => '9560',
        'SIS0561' => '9561',
        'SIS0562' => '9562',
        'SIS0563' => '9563',
        'SIS0564' => '9564',
        'SIS0565' => '9565',
        'SIS0566' => '9566',
        'SIS0567' => '9567',
        'SIS0568' => '9568',
        'SIS0569' => '9569',
        'SIS0570' => '9570',
        'SIS0571' => '9571',
        'SIS0572' => '9572',
        'SIS0573' => '9573',
        'SIS0574' => '9574',
        'SIS0575' => '9575',
        'SIS0576' => '9576',
        'SIS0577' => '9577',
        'SIS0578' => '9578',
        'SIS0579' => '9579',
        'SIS0580' => '9580',
        'SIS0581' => '9581',
        'SIS0582' => '9582',
        'SIS0583' => '9583',
        'SIS0584' => '9584',
        'SIS0585' => '9585',
        'SIS0586' => '9586',
        'SIS0587' => '9587',
        'SIS0588' => '9588',
        'SIS0589' => '9589',
        'SIS0590' => '9590',
        'SIS0591' => '9591',
        'SIS0592' => '9592',
        'SIS0593' => '9593',
        'SIS0594' => '9594',
        'SIS0595' => '9595',
        'SIS0596' => '9596',
        'SIS0597' => '9597',
        'SIS0598' => '9598',
        'SIS0599' => '9599',
        'SIS0600' => '9600',
        'SIS0601' => '9601',
        'SIS0602' => '9602',
        'SIS0603' => '9603',
        'SIS0604' => '9604',
        'SIS0605' => '9605',
        'SIS0606' => '9606',
        'SIS0607' => '9607',
        'SIS0608' => '9608',
        'SIS0609' => '9609',
        'SIS0610' => '9610',
        'SIS0611' => '9611',
        'SIS0612' => '9612',
        'SIS0613' => '9613',
        'SIS0614' => '9614',
        'SIS0615' => '9615',
        'SIS0616' => '9616',
        'SIS0617' => '9617',
        'SIS0618' => '9618',
        'SIS0619' => '9619',
        'SIS0620' => '9620',
        'SIS0621' => '9621',
        'SIS0622' => '9622',
        'SIS0623' => '9623',
        'SIS0624' => '9624',
        'SIS0625' => '9625',
        'SIS0626' => '9626',
        'SIS0627' => '9627',
        'SIS0628' => '9628',
        'SIS0629' => '9629',
        'SIS0630' => '9630',
        'SIS0631' => '9631',
        'SIS0632' => '9632',
        'SIS0633' => '9633',
        'SIS0634' => '9634',
        'SIS0635' => '9635',
        'SIS0636' => '9636',
        'SIS0637' => '9637',
        'SIS0638' => '9638',
        'SIS0639' => '9639',
        'SIS0640' => '9640',
        'SIS0641' => '9641',
        'SIS0642' => '9642',
        'SIS0643' => '9643',
        'SIS0644' => '9644',
        'SIS0645' => '9645',
        'SIS0646' => '9646',
        'SIS0647' => '9647',
        'SIS0648' => '9648',
        'SIS0649' => '9649',
        'SIS0650' => '9650',
        'SIS0651' => '9651',
        'SIS0652' => '9652',
        'SIS0653' => '9653',
        'SIS0654' => '9654',
        'SIS0655' => '9655',
        'SIS0656' => '9656',
        'SIS0657' => '9657',
        'SIS0658' => '9658',
        'SIS0659' => '9659',
        'SIS0660' => '9660',
        'SIS0661' => '9661',
        'SIS0662' => '9662',
        'SIS0663' => '9663',
        'SIS0664' => '9664',
        'SIS0665' => '9665',
        'SIS0666' => '9666',
        'SIS0667' => '9667',
        'SIS0668' => '9668',
        'SIS0669' => '9669',
        'SIS0670' => '9670',
        'SIS0671' => '9671',
        'SIS0672' => '9672',
        'SIS0673' => '9673',
        'SIS0674' => '9674',
        'SIS0675' => '9675',
        'SIS0676' => '9676',
        'SIS0677' => '9677',
        'SIS0678' => '9678',
        'SIS0681' => '9681',
        'SIS0682' => '9682',
        'SIS0683' => '9683',
        'SIS0684' => '9684',
        'SIS0685' => '9685',
        'SIS0686' => '9686',
        'SIS0687' => '9687',
        'SIS0688' => '9688',
        'SIS0689' => '9689',
        'SIS0690' => '9690',
        'SIS0700' => '9700',
        'SIS0801' => '9801',
        'SIS0899' => '9899',
        'SIS0900' => '9900',
        'SIS0909' => '9909',
        'SIS0912' => '9912',
        'SIS0913' => '9913',
        'SIS0914' => '9914',
        'SIS0915' => '9915',
        'SIS0928' => '9928',
        'SIS0929' => '9929',
        'SIS930' => '9930',
        'SIS0931' => '9931',
        'SIS0932' => '9932',
        'SIS0933' => '9933',
        'SIS0944' => '9934',
        'SIS0935' => '9935',
        'SIS0966' => '9966',
        'SIS0992' => '9992',
        'SIS0994' => '9994',
        'SIS0995' => '9995',
        'SIS0996' => '9996',
        'SIS0997' => '9997',
        'SIS0998' => '9998',
        'SIS0999' => '9999',
    ];

    /**
     * @return string 2 letter language ISO code
     */
    public static function getIso639Alpha2(): string;

    /**
     * @return string 3 letter language ISO code
     */
    public static function getIso639Alpha3(): string;

    /**
     * @return string|null Friendly message for the customer or null if not found
     */
    public function getDsResponseMessage(string $code): ?string;

    /**
     * @return string|null Friendly error message for the customer or null if not found
     */
    public function getErrorMessage(string $code): ?string;
}
