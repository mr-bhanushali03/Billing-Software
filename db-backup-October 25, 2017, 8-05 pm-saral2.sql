

CREATE TABLE `consignee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `pin_code` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO consignee VALUES("5","suk-001","SUKHARAM ELECTRIC ENTERPRISE","0","India","1","SURAT"," B/1-2 Saifa Complex Opp- BRC Ground , Udhana Main Road SURAT","0","0","0000-00-00","24ABQFS0348N1ZO");
INSERT INTO consignee VALUES("4","MB-01","M B AUTOMATION","0","India","2","Dadra","260- Sheetal Industrial Estate, Demni Road, Dadra","396230","0","0000-00-00","26AAMHS4089R2ZZ");
INSERT INTO consignee VALUES("2","CO-101","IDEAL TECHNOLOGIES","9510018979","India","1","Vapi","Damanganga Industrial Park, Gate No 2 Survey No 397/1/P1, Plot No 29, Dungra, Vapi, Dist. Valsad","396195","shajimon@idealtechnologies.co.in","0000-00-00","24AAFFI8576A1ZG");
INSERT INTO consignee VALUES("3","CO-102","SUPER ELECTRICALS","9825869951","INDIA","1","Kadodara,"," C/1, Gopal Krishna Complex, Opp. Garden Vareli Mills, Dist-Surat","394327","superele1022@yahoo.co.in","0000-00-00","24AEMPB3576L1ZA");
INSERT INTO consignee VALUES("6","Prg-001","PRAGNESH ELECTROLINKS","0","India","1","vapi","  5307/4, 4th Phase, Near GEB sub station GIDC VAPI","396195","0","0000-00-00","24AJEPP2898Q1ZC");
INSERT INTO consignee VALUES("7","sam-001","SAMIRIKA POWER CONTROL","0","India","1","VAPI"," Plot No. 303/5B, 2nd Phase G.I.D.C ","396195","0","0000-00-00","24AYFPP1376D1ZL");
INSERT INTO consignee VALUES("8","JAT-001","JATSON POWER PVT. LTD","0","India","1","VAPI"," Plot no. A-1/5406,Opp, 66kv GETCO substation, 4th Phase, GIDC Vapi","396195","0","0000-00-00","24AABCJ4989P1ZT");
INSERT INTO consignee VALUES("9","MAH-001","MAHESHWARI TRADING COMPANY","0","India","1","VAPI"," opp. VIA G.I.D.C VAPI","396195","0","0000-00-00","24AAHFM9435A1ZI");
INSERT INTO consignee VALUES("10","MIC-001","MICRO POWER","8155982980","India","1","VAPI"," Plot No. J-758/2, Part II, 40 Shed Area GIDC Vapi, Dist Valsad","396195","0","0000-00-00","24AAUFM9317Q1ZB");
INSERT INTO consignee VALUES("11","wel-001","WELPOWER SYSTEMS","0","India","2","Silvassa","  Prince complex, Amli, Silvassa","396230","0","0000-00-00","26ABKPL3470A1ZY");
INSERT INTO consignee VALUES("12","Par-001","PARESH ELECTRICALS","0","India","1","Baroda"," 9,Jayshree Gayatri nagar
New IPCL Road, Gorwa, BARODA-16","0","0","0000-00-00","24ACQPP6006M1Z7");
INSERT INTO consignee VALUES("13","De-001","DEEP ELECTRICALS","0","India","1","VAPI"," Silvassa Road G.I.D.C VAPI","396195","0","0000-00-00","24ADKPJ8876A1ZG");
INSERT INTO consignee VALUES("14","PRAS-001","PRASHANT ELECTRICALS LTD.","9833887587","India","4","Tarapur","Plot No. S/20, Vikram Glass Nakam, M.I.D.C., Tarapur, Dist- Palgar","401506","supply.chain@prashantelectricals.in","0000-00-00","27AAGCP6498Q1ZA");
INSERT INTO consignee VALUES("15","Raj-001","RAJAN ELECTRO CONTROL","0","India","1","VAPI","Plot No. 2912, 4th phase
G.I.D.C VAPI","396195","0","0000-00-00","24AARPD1384R1Z5");
INSERT INTO consignee VALUES("16","vid-001","VIDHYUT POWER PRIVATE LIMITED","9099945165","India","1","Pardi","Survey No. 337, plot no.01, BALDA Industrial Estate VIA- GIDC, Killa- PARDI, Dist: Valsad ","396125","purchase@vidhyutpower.in","0000-00-00","24AADCV3164E1ZL");
INSERT INTO consignee VALUES("17","crp-001","CRP CONTROL ENGINEERS","28805281","India","4","MUMBAI"," 2/2 Bijal Apartment, New link Road Evershine Nagar, Malad(W), MUMBAI","400064","crpcontrol@gmail.com","0000-00-00","27ACXPJ1465B1ZI");
INSERT INTO consignee VALUES("18","HAR-001","HARI OM POWER ELECTRONICS","0","India","2","Dadra","Near- check post , Dadra","396230","0","0000-00-00","26AKMPP2682D1ZZ");
INSERT INTO consignee VALUES("19","vi-001","VIBHAV ELECTRO SERVICES","0","India","1","VAPI","Near Morarji Circle G.I.D.C VAPI","396195","0","0000-00-00","24ACCPP2413Q1ZI");
INSERT INTO consignee VALUES("20","MOON-002","MOON LIGHT TRANSFORMERS","8390905869","India","4","Tarapur"," Plot No- J-121, MIDC Tarapur Boisar, Tal/Dist- Palgar","401506","Accounts@moonlightind.co","0000-00-00","27AAJFM9773F1ZR");
INSERT INTO consignee VALUES("21","Lan-001","LANTEC TECHNOLOGIES","02602633263","India","2","Silvassa"," Survey No. 450/2/2, Masat Ind. Estate, Masat Silvassa","396230","lantec14@gmail.com","0000-00-00","26AACFLO823A1Z2");
INSERT INTO consignee VALUES("22","Adv-001","ADVANCE POWER CONTROLS","0","India","1","VAPI","Near G.I.D.C Office VAPI","396195","0","0000-00-00","24ADQPG0607G1ZW");
INSERT INTO consignee VALUES("23","pop-001","POPULAR ELECTRIC STORES","9925039032","India","1","BHILAD","PL-CM-3001/2, Shio No.7, Ground Floor, G.I.D.C Sarigam, Dist. Valsad ","396155","0","0000-00-00","24AARPV5397A1Z9");
INSERT INTO consignee VALUES("24","ENG-001","ENERGY ZONE","0","India","2","Silvassa","Prince Complex, Amli Silvassa","396230","0","0000-00-00","26ADDPL6066D1ZP");
INSERT INTO consignee VALUES("25","hi-001","HI-TECH MARKETING","9376932308","India","1","SURAT","Shop No: 16-17&114- Belgium Tower, Ring Road, SURAT","395003","hitech.surat@gmail.com","0000-00-00","24AABFH5705N1ZD");
INSERT INTO consignee VALUES("26","shr-001","SHREE BHIKSHU ELECTRICALS","02622-272 115 ","India","1","SURAT","Block No:13, Shop No:6 Vareli Market, Near Vareli Garden ,Kadodara Ta. Palsana Dist. Surat","0","bhikshuele@gmail.com","0000-00-00","24ADDPB8370N1ZF");
INSERT INTO consignee VALUES("27","PAY-001","PAYAL ELECTRICALS","0","India","1","VAPI","vapi","396195","0","0000-00-00","24AAEFP3577B1ZH");
INSERT INTO consignee VALUES("28","ANN-001","ANNPURNA ELECTRICAL PVT. LTD","0","India","2","Silvassa","Plot no: 37/1 near post office silvassa ","396230","0","0000-00-00","26AAGCA4946A1ZZ");
INSERT INTO consignee VALUES("29","TUF-001","TUFROPES PVT. LTD","0","India","2","RAKHOLI"," Plot No:6 Survey No.101,Rakholi Industrial Estate Rakholi ","396230","0","0000-00-00","26AAACT8968M1ZJ");
INSERT INTO consignee VALUES("30","Kri-001","KIRAN ELECTRICAL","0","India","1","VAPI","G.I.D.C Char Rasta , Silvassa Road .G.I.D.C VAPI","396195","0","0000-00-00","24ACFPP2287H1ZI");
INSERT INTO consignee VALUES("31","Riy-001","RIYA ENTERPRISE","0","India","2","Silvassa","Amli Silvassa","396230","0","0000-00-00","26ALEPJ7878C1ZX");
INSERT INTO consignee VALUES("32","VIS-001","VISHWAKARMA ELECTRIC CONTROL","0","India","2","Silvassa","Gala No. 37 Raj Industrial Estate, Amli , Silvassa","396230","0","0000-00-00","26AAQPV9704N1ZO");
INSERT INTO consignee VALUES("33","NAT-001","NATIONAL ELECTRICAL","0","India","2","Silvassa","Amli Silvassa","396230","0","0000-00-00","26ADQPG5824P1ZW");
INSERT INTO consignee VALUES("34","MOON-001","MOON ELEC CONTROL","0","India","4","Palghar","Plot No: J-123, M.I.D.C Tarapur Boisar Tal/Dist- Palghar","401506","moonlightind@hotmail.com","0000-00-00","27AALHS8645A1ZW");
INSERT INTO consignee VALUES("35","TUL-001","TULSI SWITCHGERAS","0","India","1","SURAT","Plot No. 2421/A Road No. 2, Shop No: U-3 Arihant Complex, G.I.D.C Sachin, SURAT","394220","kadodara@tulsielectricals.com","0000-00-00","24AEFPB1006A1ZR");
INSERT INTO consignee VALUES("36","SOM-001","SAMOR INDUSTRIES","0260-2995453","India","1","VAPI","Plot No. 303/5B, IInd Phase, Near German Ink Company,G.I.D.C., Vapi ","396195","samor_2008@hotmail.com","0000-00-00","24ACCPP2389M1Z7");
INSERT INTO consignee VALUES("37","crp-002","CRP ELECTRICALS & SWITCHGEARS","0","India","4","MALAD","1/17-Bijal Appartment , New link Road, Evershine Nagar Malad West Mumbai","400064","0","0000-00-00","27AABPJ8287F1ZI");
INSERT INTO consignee VALUES("38","VAI-0001","VAIBHAV AGENCIES","0","India","1","VAPI","14, Nandvana Chambers, G.I.D.C Char Rasta VAPI","396195","0","0000-00-00","24ATBPS9029F1ZM");
INSERT INTO consignee VALUES("39","sel-001","SELLITE INDUSTRIAL SERVICES","0","India","1","VAPI","211, 2nd Floor Bussiness Point, Near Heena Arcade, G.I.D.C VAPI ","396195","0","0000-00-00","24ACOPV4942J1Z0");
INSERT INTO consignee VALUES("40","PPE-001","P.P. ELECTRICALS","02602429180","India","1","VAPI","11, Globe Chamber Char Rasta, G.I.D.C VAPI ","396195","ppelectricalsvapi@gmail.com","0000-00-00","24AAKFP0955D1ZF");
INSERT INTO consignee VALUES("41","VEE-001","VEERA ENTERPRISES","0","India","1","VAPI","Raghuvir Complex Opp. VIA G.I.D.C Vapi","396195","0","0000-00-00","24AHUPG9089N1ZB");
INSERT INTO consignee VALUES("42","PAR-001","PARTH ELECTRICALS","0","India","1","VAPI","Vapi Char Rasta G.I.D.C VAPI","396195","0","0000-00-00","24AFJPD8560L1Z7");
INSERT INTO consignee VALUES("43","TUL-002","TULSI ELECTRICALS","0","INDIA","1","SURAT"," 2, Dhawanwala Complex, Opp. SBI, G.I.D.C Pandesara, SURAT","394221","0","2017-10-12","24AEFPB1023B1ZO");





CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `pin_code` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("6","suk-001","SUKHARAM ELECTRIC ENTERPRISE","0","India","1","SURAT"," B/1-2 Saifa Complex Opp- BRC Ground , Udhana Main Road SURAT","0","0","0000-00-00","24ABQFS0348N1ZO");
INSERT INTO customer VALUES("5","MB-01","M B AUTOMATION","0","India","2","Dadra","260- Sheetal Industrial Estate, Demni Road, Dadra","396230","0","0000-00-00","26AAMHS4089R2ZZ");
INSERT INTO customer VALUES("3","SU-101","SUPER ELECTRICALS","9825869951","INDIA","1","Kadodara,"," C/1,Gopal krishna Complex, Opp. Garden Vareli Mills,Kaodara, Dist,-Surat","394327","superele1022@yahoo.co.in","0000-00-00","24AEMPB3576L1ZA");
INSERT INTO customer VALUES("4","SA-102","IDEAL TECHNOLOGIES","9510018979","India","1","Vapi"," Damanganga Industrial Park, Gate NO 2 Survey No 397/1/P1, Plot No 29 Dungra Dist. Valsad","396195","shajimon@idealtechnologies.co.in","0000-00-00","24AAFFI8576A1ZG");
INSERT INTO customer VALUES("10","JAT-001","JATSON POWER PVT. LTD","0","India","1","VAPI"," Plot no. A-1/5406,Opp, 66kv GETCO substation, 4th Phase, GIDC Vapi","396195","0","0000-00-00","24AABCJ4989P1ZT");
INSERT INTO customer VALUES("8","Prg-001","PRAGNESH ELECTROLINKS","0","India","1","VAPI"," 5307/4, 4th Phase, Near GEB sub station GIDC VAPI","396195","0","0000-00-00","24AJEPP2898Q1ZC");
INSERT INTO customer VALUES("9","sam-001","SAMIRIKA POWER CONTROL","0","India","1","VAPI"," Plot No. 303/5B, 2nd Phase G.I.D.C ","396195","0","0000-00-00","24AYFPP1376D1ZL");
INSERT INTO customer VALUES("11","MAH-001","MAHESHWARI TRADING COMPANY","0","India","1","VAPI"," Opp. VIA G.I.D.C VAPI","396195","0","0000-00-00","24AAHFM9435A1ZI");
INSERT INTO customer VALUES("12","MIC-001","MICRO POWER","8155982980","India","1","VAPI"," Plot No. J-758/2, Part II, 40 Shed Area GIDC Vapi, Dist Valsad","396195","0","0000-00-00","24AAUFM9317Q1ZB");
INSERT INTO customer VALUES("13","wel-001","WELPOWER SYSTEMS","0","India","2","Silvassa"," Prince complex, Amli, Silvassa","396230","0","0000-00-00","26ABKPL3470A1ZY");
INSERT INTO customer VALUES("14","Par-001","PARESH ELECTRICALS","0","India","1","Baroda"," 9,Jayshree Gayatri nagar
New IPCL Road, Gorwa, BARODA-16","16","0","0000-00-00","24ACQPP6006M1Z7");
INSERT INTO customer VALUES("15","De-001","DEEP ELECTRICALS","0","India","1","VAPI"," Silvassa Road G.I.D.C VAPI","396195","0","0000-00-00","24ADKPJ8876A1ZG");
INSERT INTO customer VALUES("16","PRAS-001","PRASHANT ELECTRICALS LTD.","9833887587","India","4","Tarapur","Plot No. S/20, Vikram Glass Nakam, M.I.D.C.,
Tarapur, Dist- Palgar","401506","supply.chain@prashantelectricals.in","0000-00-00","27AAGCP6498Q1ZA");
INSERT INTO customer VALUES("17","Raj-001","RAJAN ELECTRO CONTROL","0","India","1","VAPI","Plot No. 2912, 4th phase
G.I.D.C VAPI","396195","0","0000-00-00","24AARPD1384R1Z5");
INSERT INTO customer VALUES("18","vid-001","VIDHYUT POWER PRIVATE LIMITED","9099945165","India","1","Pardi","Survey No. 337, plot no.01, BALDA Industrial Estate VIA- GIDC, Killa- PARDI, Dist: Valsad ","396125","purchase@vidhyutpower.in","0000-00-00","24AADCV3164E1ZL");
INSERT INTO customer VALUES("19","crp-001","CRP CONTROL ENGINEERS","28805281","India","4","MUMBAI"," 2/2 Bijal Apartment, New link Road Evershine Nagar, Malad(W), MUMBAI","400064","crpcontrol@gmail.com","0000-00-00","27ACXPJ1465B1ZI");
INSERT INTO customer VALUES("20","HAR-001","HARI OM POWER ELECTRONICS","0","India","2","Dadra"," Near- check post , Dadra","396230","0","0000-00-00","26AKMPP2682D1ZZ");
INSERT INTO customer VALUES("21","vi-001","VIBHAV ELECTRO SERVICES","0","India","1","VAPI","Near Morarji Circle G.I.D.C VAPI","396195","0","0000-00-00","24ACCPP2413Q1ZI");
INSERT INTO customer VALUES("22","MOON-002","MOON LIGHT TRANSFORMERS","0252532558","India","4","Tarapur"," Plot No- J-121, MIDC Tarapur Boisar, Tal/Dist- Palgar","401506","Accounts@moonlightind.co","0000-00-00","27AAJFM9773F1ZR");
INSERT INTO customer VALUES("23","Lan-001","LANTEC TECHNOLOGIES","02602633263","India","2","Silvassa"," Survey No. 450/2/2, Masat Ind. Estate, Masat Silvassa","396230","lantec14@gmail.com","0000-00-00","26AACFLO823A1Z2");
INSERT INTO customer VALUES("24","Adv-001","ADVANCE POWER CONTROLS","0","India","1","VAPI"," Near G.I.D.C Office VAPI","396195","0","0000-00-00","24ADQPG0607G1ZW");
INSERT INTO customer VALUES("25","pop-001","POPULAR ELECTRIC STORES","9925039032","India","1","Sarigam","PL-CM-3001/2, Shio No.7, Ground Floor, G.I.D.C Sarigam, Dist. Valsad ","396155","0","0000-00-00","24AARPV5397A1Z9");
INSERT INTO customer VALUES("26","ENG-001","ENERGY ZONE","0","India","2","Silvassa","Prince Complex, Amli Silvassa","396230","0","0000-00-00","26ADDPL6066D1ZP");
INSERT INTO customer VALUES("27","hi-001","HI-TECH MARKETING","9376932308","India","1","SURAT","Shop No: 16-17&114- Belgium Tower, Ring Road, SURAT","395003","hitech.surat@gmail.com","0000-00-00","24AABFH5705N1ZD");
INSERT INTO customer VALUES("28","shr-001","SHREE BHIKSHU ELECTRICALS","02622-272 115","India","1","SURAT","Block No:13, Shop No:6 Vareli Market, Near Vareli Garden ,Kadodara Ta. Palsana Dist. Surat","0","bhikshuele@gmail.com","0000-00-00","24ADDPB8370N1ZF");
INSERT INTO customer VALUES("29","PAY-001","PAYAL ELECTRICALS","0","India","1","VAPI"," vapi","396195","0","0000-00-00","24AAEFP3577B1ZH");
INSERT INTO customer VALUES("30","ANN-001","ANNPURNA ELECTRICAL PVT. LTD","0","India","2","Silvassa","Plot no: 37/1 near post office silvassa","396230","0","0000-00-00","26AAGCA4946A1ZZ");
INSERT INTO customer VALUES("31","TUF-001","TUFROPES PVT. LTD","0","India","2","RAKHOLI"," Plot No:6 Survey No.101,Rakholi Industrial Estate Rakholi ","396230","0","0000-00-00","26AAACT8968M1ZJ");
INSERT INTO customer VALUES("32","Kri-001","KIRAN ELECTRICAL","0","India","1","VAPI"," G.I.D.C Char Rasta , Silvassa Road .G.I.D.C VAPI","396195","0","0000-00-00","24ACFPP2287H1ZI");
INSERT INTO customer VALUES("34","Riy-001","RIYA ENTERPRISE","0","India","2","Silvassa","Amli Silvassa.","396230","0","0000-00-00","26ALEPJ7878C1ZX");
INSERT INTO customer VALUES("35","VIS-001","VISHWAKARMA ELECTRIC CONTROL","0","India","2","Silvassa","Gala No. 37 Raj Industrial Estate, Amli , Silvassa","396230","0","0000-00-00","26AAQPV9704N1ZO");
INSERT INTO customer VALUES("36","NAT-001","NATIONAL ELECTRICAL","0","India","2","Silvassa"," Amli Silvassa","396230","0","0000-00-00","26ADQPG5824P1ZW");
INSERT INTO customer VALUES("37","MOON-001","MOON ELEC CONTROL","0","India","4","Palghar","Plot No: J-123, M.I.D.C Tarapur Boisar Tal/Dist- Palghar","401506","moonlightind@hotmail.com","0000-00-00","27AALHS8645A1ZW");
INSERT INTO customer VALUES("39","TUL-001","TULSI SWITCHGERAS","0","India","1","SURAT","Plot No. 2421/A Road No. 2, Shop No: U-3 Arihant Complex, G.I.D.C Sachin, SURAT","394220","kadodara@tulsielectricals.com","0000-00-00","24AEFPB1006A1ZR");
INSERT INTO customer VALUES("40","SOM-001","SAMOR INDUSTRIES","0260-2995453","India","1","VAPI","Plot No. 303/5B, IInd Phase, Near German Ink Company,G.I.D.C., Vapi ","396195","samor_2008@hotmail.com","0000-00-00","24ACCPP2389M1Z7");
INSERT INTO customer VALUES("41","crp-002","CRP ELECTRICALS & SWITCHGEARS","9820065205","India","4","MALAD","1/17-Bijal Appartment , New link Road, Evershine Nagar Malad West Mumbai","400064","0","0000-00-00","27AABPJ8287F1ZI");
INSERT INTO customer VALUES("42","VAI-0001","VAIBHAV AGENCIES","0","INDIA","1","VAPI","14, Nandvana Chambers, G.I.D.C Char Rasta VAPI","396195","0","2017-10-01","24ATBPS9029F1ZM");
INSERT INTO customer VALUES("43","sel-001","SELLITE INDUSTRIAL SERVICES","0","India","1","VAPI","211, 2nd Floor Bussiness Point, Near Heena Arcade, G.I.D.C VAPI","396195","0","0000-00-00","24ACOPV4942J1Z0");
INSERT INTO customer VALUES("44","PPE-001","P.P. ELECTRICALS","0","India","1","VAPI","11, Globe Chamber Char Rasta, G.I.D.C VAPI","396195","0","0000-00-00","24AAKFP0955D1ZF");
INSERT INTO customer VALUES("45","VEE-001","VEERA ENTERPRISES","0","India","1","VAPI","Raghuvir Complex Opp. VIA G.I.D.C Vapi","396195","0","0000-00-00","24AHUPG9089N1ZB");
INSERT INTO customer VALUES("46","PAR-001","PARTH ELECTRICALS","0","India","1","VAPI","Vapi Char Rasta G.I.D.C VAPI","396195","0","0000-00-00","24AFJPD8560L1Z7");
INSERT INTO customer VALUES("47","TUL-002","TULSI ELECTRICALS","0","INDIA","1","SURAT"," 2, Dhawanwala Complex, Opp. SBI, G.I.D.C Pandesara, SURAT","394221","0","2017-10-12","24AEFPB1023B1ZO");





CREATE TABLE `invoice` (
  `quot_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_no` varchar(100) NOT NULL,
  `q_n` int(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `quot_cust` varchar(500) NOT NULL,
  `state` varchar(255) NOT NULL,
  `stateCode` varchar(255) NOT NULL,
  `transmode` varchar(255) NOT NULL,
  `supplydate` date DEFAULT NULL,
  `conname` varchar(255) NOT NULL,
  `lrno` varchar(255) NOT NULL,
  `vehicleno` varchar(255) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `packing` varchar(100) NOT NULL,
  `transpotation` varchar(255) NOT NULL,
  `grandtotal` varchar(100) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `cgst_amt` varchar(255) NOT NULL,
  `igst_amt` varchar(255) NOT NULL,
  `sgst_amt` varchar(255) NOT NULL,
  `inv_date` date NOT NULL,
  `order_date` date DEFAULT NULL,
  `rvalue` varchar(255) NOT NULL,
  PRIMARY KEY (`quot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

INSERT INTO invoice VALUES("23","1","1","-","5","","","","0000-00-00","4","","","2016.00","","","2379.00","9","0","9","181.44","0.00","181.44","2017-07-07","2017-07-07","0.12");
INSERT INTO invoice VALUES("24","2","2","-","6","","","","0000-00-00","5","","","1470.00","","60.00","1805.00","0","18","0","0.00","275.40","0.00","2017-07-07","2017-07-07","-0.40");
INSERT INTO invoice VALUES("25","3","3","0175","4","","","","0000-00-00","2","","","1800.00","","","2124.00","0","18","0","0.00","324.00","0.00","2017-07-10","2017-07-10","0.00");
INSERT INTO invoice VALUES("26","4","4","-","8","","","","0000-00-00","6","","","8070.00","0.00","0.00","9523.00","0","18","0","0.00","1452.60","0.00","2017-07-11","2017-07-11","0.40");
INSERT INTO invoice VALUES("27","5","5","-","9","","","","0000-00-00","7","","","4950.00","0.00","0.00","5841.00","0","18","0","0.00","891.00","0.00","2017-07-12","2017-07-12","0.00");
INSERT INTO invoice VALUES("28","6","6","-","10","","","","0000-00-00","8","","","4242.00","0.00","0.00","5006.00","0","18","0","0.00","763.56","0.00","2017-07-17","2017-07-17","0.44");
INSERT INTO invoice VALUES("29","7","7","-","11","","","","0000-00-00","9","","","4356.00","0.00","0.00","5140.00","0","18","0","0.00","784.08","0.00","2017-07-17","2017-07-17","-0.08");
INSERT INTO invoice VALUES("30","8","8","100","12","","","","2017-07-18","10","","","9450.00","0.00","0.00","11151.00","0","18","0","0.00","1701.00","0.00","2017-07-18","2017-07-17","0.00");
INSERT INTO invoice VALUES("31","9","9","-","11","","","","2017-07-18","9","","","468.00","0.00","0.00","552.00","0","18","0","0.00","84.24","0.00","2017-07-18","2017-07-18","-0.24");
INSERT INTO invoice VALUES("32","10","10","-","13","","","","2017-07-18","11","","","6510.00","0.00","0.00","7682.00","9","0","9","585.90","0.00","585.90","2017-07-18","2017-07-18","0.20");
INSERT INTO invoice VALUES("33","11","11","-","8","","","","2017-07-19","6","","","12690.00","0.00","0.00","14974.00","0","18","0","0.00","2284.20","0.00","2017-07-19","2017-07-19","-0.20");
INSERT INTO invoice VALUES("34","12","12","-","5","","","","2017-07-19","4","","","1950.00","","","2301.00","9","0","9","175.50","0.00","175.50","2017-07-19","2017-07-19","0.00");
INSERT INTO invoice VALUES("35","13","13","-","14","","","Surat Ahmd. Tra","2017-07-20","12","","","29946.00","0.00","0.00","35336.00","0","18","0","0.00","5390.28","0.00","2017-07-20","2017-07-20","-0.28");
INSERT INTO invoice VALUES("36","14","14","-","10","","","","2017-07-20","8","","","5760.00","0.00","0.00","6797.00","0","18","0","0.00","1036.80","0.00","2017-07-20","2017-07-20","0.20");
INSERT INTO invoice VALUES("37","15","15","-","15","","","","2017-07-20","13","","","2330.00","0.00","0.00","2749.00","0","18","0","0.00","419.40","0.00","2017-07-20","2017-07-20","-0.40");
INSERT INTO invoice VALUES("38","16","16","pel/po/12/1718","16","","","","2017-07-20","14","","","11165.00","0.00","0.00","13175.00","0","18","0","0.00","2009.70","0.00","2017-07-20","2017-07-18","0.30");
INSERT INTO invoice VALUES("39","17","17","-","6","","","surat Ahmd. Tra","2017-07-21","5","","","18678.00","0.00","0.00","22040.00","0","18","0","0.00","3362.04","0.00","2017-07-21","2017-07-20","-0.04");
INSERT INTO invoice VALUES("40","18","18","-","17","","","","2017-07-21","15","","","1155.00","0.00","0.00","1363.00","0","18","0","0.00","207.90","0.00","2017-07-21","2017-07-21","0.10");
INSERT INTO invoice VALUES("41","19","19","31","18","","","","2017-07-22","16","","","555.00","0.00","0.00","655.00","0","18","0","0.00","99.90","0.00","2017-07-22","2017-07-22","0.10");
INSERT INTO invoice VALUES("42","20","20","-","15","","","","2017-04-24","13","","","330.00","0.00","0.00","389.00","0","18","0","0.00","59.40","0.00","2017-07-24","2017-07-24","-0.40");
INSERT INTO invoice VALUES("43","21","21","-","6","","","courier","0000-00-00","5","","","1080.00","0.00","60.00","1345.00","0","18","0","0.00","205.20","0.00","2017-07-24","2017-07-24","-0.20");
INSERT INTO invoice VALUES("44","22","22","-","19","","","","2017-07-24","17","","","8400.00","0.00","0.00","9912.00","0","18","0","0.00","1512.00","0.00","2017-07-24","2017-07-24","0.00");
INSERT INTO invoice VALUES("45","23","23","211","4","","","","2017-07-24","2","","","1020.00","0.00","0.00","1204.00","0","18","0","0.00","183.60","0.00","2017-07-24","2017-07-22","0.40");
INSERT INTO invoice VALUES("46","24","24","-","5","","","","2017-07-25","4","","","1050.00","0.00","0.00","1239.00","9","0","9","94.50","0.00","94.50","2017-07-25","2017-07-25","0.00");
INSERT INTO invoice VALUES("47","25","25","-","15","","","","2017-07-27","13","","","11520.00","0.00","0.00","13594.00","0","18","0","0.00","2073.60","0.00","2017-07-27","2017-07-25","0.40");
INSERT INTO invoice VALUES("48","26","26","-","20","","","","0000-00-00","18","","","19635.00","0.00","0.00","23169.00","9","0","9","1767.15","0.00","1767.15","2017-07-28","2017-07-28","-0.30");
INSERT INTO invoice VALUES("49","27","27","-","21","","","","2017-07-28","19","","","990.00","0.00","0.00","1168.00","0","18","0","0.00","178.20","0.00","2017-07-28","2017-07-28","-0.20");
INSERT INTO invoice VALUES("50","28","28","-","14","","","surat Ahmd. tra","2017-07-31","12","","","23685.00","0.00","0.00","27948.00","0","18","0","0.00","4263.30","0.00","2017-07-31","2017-07-31","-0.30");
INSERT INTO invoice VALUES("51","29","29","010","22","","","","2017-08-01","20","","","600.00","50.00","0.00","767.00","0","18","0","0.00","117.00","0.00","2017-08-01","2017-07-29","0.00");
INSERT INTO invoice VALUES("52","30","30","130394","23","","","","2017-08-01","21","","","1935.00","0.00","0.00","2283.00","9","0","9","174.15","0.00","174.15","2017-08-01","2017-07-28","-0.30");
INSERT INTO invoice VALUES("53","31","31","31","18","","","","2017-08-01","16","","","3945.00","0.00","0.00","4655.00","0","18","0","0.00","710.10","0.00","2017-08-01","2017-07-22","-0.10");
INSERT INTO invoice VALUES("54","32","32","-","8","","","","2017-08-01","6","","","2460.00","0.00","0.00","2903.00","0","18","0","0.00","442.80","0.00","2017-08-01","2017-08-01","0.20");
INSERT INTO invoice VALUES("55","33","33","-","24","","","","2017-08-02","22","","","7200.00","0.00","0.00","8496.00","0","18","0","0.00","1296.00","0.00","2017-08-02","2017-08-02","0.00");
INSERT INTO invoice VALUES("56","34","34","0226","4","","","","0000-00-00","2","","","2040.00","0.00","0.00","2407.00","0","18","0","0.00","367.20","0.00","2017-08-03","2017-08-03","-0.20");
INSERT INTO invoice VALUES("57","35","35","-","14","","","surat Ahmd. tra","0000-00-00","12","","","25335.00","0.00","0.00","29895.00","0","18","0","0.00","4560.30","0.00","2017-08-04","2017-08-04","-0.30");
INSERT INTO invoice VALUES("58","36","36","-","9","","","","2017-08-04","7","","","3555.00","0.00","0.00","4195.00","0","18","0","0.00","639.90","0.00","2017-08-04","2017-08-04","0.10");
INSERT INTO invoice VALUES("59","37","37","-","9","","","","2017-08-05","7","","","8530.00","0.00","0.00","10065.00","0","18","0","0.00","1535.40","0.00","2017-08-05","2017-08-04","-0.40");
INSERT INTO invoice VALUES("60","38","38","-","25","","","","0000-00-00","23","","","1740.00","0.00","0.00","2053.00","0","18","0","0.00","313.20","0.00","2017-08-08","2017-08-05","-0.20");
INSERT INTO invoice VALUES("61","39","39","64,70","18","","","","2017-08-09","16","","","1720.00","0.00","0.00","2030.00","0","18","0","0.00","309.60","0.00","2017-08-09","2017-08-08","0.40");
INSERT INTO invoice VALUES("62","40","40","-","14","","","surat Ahmd. tra","2017-08-10","12","","","18610.50","0.00","0.00","21960.00","0","18","0","0.00","3349.89","0.00","2017-08-10","2017-08-10","-0.39");
INSERT INTO invoice VALUES("63","41","41","-","26","","","","2017-08-12","24","","","1428.00","0.00","0.00","1685.00","9","0","9","128.52","0.00","128.52","2017-08-12","2017-08-12","-0.04");
INSERT INTO invoice VALUES("64","42","42","-","5","","","","0000-00-00","4","","","16840.00","0.00","0.00","19871.00","9","0","9","1515.60","0.00","1515.60","2017-08-14","2017-08-04","-0.20");
INSERT INTO invoice VALUES("65","43","43","-","27","","","surat Ahmd. tra","2017-08-14","25","","","21732.00","0.00","0.00","25644.00","0","18","0","0.00","3911.76","0.00","2017-08-14","2017-08-12","0.24");
INSERT INTO invoice VALUES("66","44","44","67","17","","","","2017-08-16","15","","","8890.00","0.00","0.00","10490.00","0","18","0","0.00","1600.20","0.00","2017-08-16","2017-08-11","-0.20");
INSERT INTO invoice VALUES("67","45","45","125","12","","","","2017-08-17","10","","","9125.00","0.00","0.00","10768.00","0","18","0","0.00","1642.50","0.00","2017-08-17","2017-08-16","0.50");
INSERT INTO invoice VALUES("68","46","46","-","12","","","","2017-08-18","10","","","4140.00","0.00","0.00","4885.00","0","18","0","0.00","745.20","0.00","2017-08-18","2017-08-18","-0.20");
INSERT INTO invoice VALUES("69","47","47","-","10","","","","2017-08-18","8","","","3981.00","0.00","0.00","4698.00","0","18","0","0.00","716.58","0.00","2017-08-18","2017-08-18","0.42");
INSERT INTO invoice VALUES("70","48","48","-","10","","","","2017-08-22","8","","","1818.00","0.00","0.00","2145.00","0","18","0","0.00","327.24","0.00","2017-08-22","2017-08-22","-0.24");
INSERT INTO invoice VALUES("71","49","49","-","17","","","","0000-00-00","15","","","675.00","0.00","0.00","797.00","0","18","0","0.00","121.50","0.00","2017-08-23","2017-08-22","0.50");
INSERT INTO invoice VALUES("72","50","50","-","28","","","surat Ahmd. tra","2017-08-24","26","","","31960.50","0.00","0.00","37713.00","0","18","0","0.00","5752.89","0.00","2017-08-24","2017-08-22","-0.39");
INSERT INTO invoice VALUES("73","51","51","95","18","","","","2017-08-28","16","","","1725.00","0.00","0.00","2036.00","0","18","0","0.00","310.50","0.00","2017-08-28","2017-08-18","0.50");
INSERT INTO invoice VALUES("74","52","52","-","8","","","","2017-08-30","6","","","6720.00","0.00","0.00","7930.00","0","18","0","0.00","1209.60","0.00","2017-08-30","2017-08-29","0.40");
INSERT INTO invoice VALUES("75","53","53","-","6","","","surat Ahmd. tra","2017-08-31","5","","","27888.00","0.00","0.00","32908.00","0","18","0","0.00","5019.84","0.00","2017-08-31","2017-08-28","0.16");
INSERT INTO invoice VALUES("76","54","54","-","27","","","","2017-08-31","25","","","600.00","0.00","35.00","749.00","0","18","0","0.00","114.30","0.00","2017-08-31","2017-08-29","-0.30");
INSERT INTO invoice VALUES("77","55","55","-","10","","","","2017-09-01","8","","","1200.00","0.00","0.00","1416.00","0","18","0","0.00","216.00","0.00","2017-09-01","2017-09-01","0.00");
INSERT INTO invoice VALUES("78","56","56","95","18","","","","2017-09-02","16","","","35616.00","0.00","0.00","42027.00","0","18","0","0.00","6410.88","0.00","2017-09-02","2017-08-18","0.12");
INSERT INTO invoice VALUES("79","57","57","-","8","","","","2017-09-02","6","","","6720.00","0.00","0.00","7930.00","0","18","0","0.00","1209.60","0.00","2017-09-02","2017-08-29","0.40");
INSERT INTO invoice VALUES("80","58","58","-","13","","","","2017-09-04","11","","","320.00","0.00","0.00","378.00","9","0","9","28.80","0.00","28.80","2017-09-04","2017-09-04","0.40");
INSERT INTO invoice VALUES("81","59","59","-","8","","","","2017-09-05","6","","","6000.00","0.00","0.00","7080.00","0","18","0","0.00","1080.00","0.00","2017-09-05","2017-09-04","0.00");
INSERT INTO invoice VALUES("82","60","60","170267","10","","","","2017-09-05","8","","","3765.00","0.00","0.00","4443.00","0","18","0","0.00","677.70","0.00","2017-09-05","2017-09-01","0.30");
INSERT INTO invoice VALUES("83","61","61","-","29","","","","2017-09-06","27","","","906.00","0.00","0.00","1069.00","0","18","0","0","163.08","0","2017-09-06","2017-09-05","-0.08");
INSERT INTO invoice VALUES("84","62","62","-","30","","","","0000-00-00","28","","","1860.00","0.00","0.00","2195.00","9","0","9","167.40","0.00","167.40","2017-09-06","2017-09-02","0.20");
INSERT INTO invoice VALUES("85","63","63","170267","10","","","","2017-09-08","8","","","16682.00","0.00","0.00","19685.00","0","18","0","0.00","3002.76","0.00","2017-09-08","2017-09-01","0.24");
INSERT INTO invoice VALUES("86","64","64","130518","23","","","","0000-00-00","21","","","2610.00","0.00","0.00","3080.00","9","0","9","234.90","0.00","234.90","2017-09-09","2017-09-05","0.20");
INSERT INTO invoice VALUES("87","65","65","140","18","","","","2017-09-09","16","","","840.00","0.00","0.00","991.00","0","18","0","0.00","151.20","0.00","2017-09-09","2017-09-07","-0.20");
INSERT INTO invoice VALUES("88","66","66","-","8","","","","2017-09-09","6","","","3900.00","0.00","0.00","4602.00","0","18","0","0.00","702.00","0.00","2017-09-09","2017-09-07","0.00");
INSERT INTO invoice VALUES("89","67","67","Email","12","","","","2017-09-09","10","","","930.00","0.00","0.00","1097.00","0","18","0","0.00","167.40","0.00","2017-09-09","2017-09-08","-0.40");
INSERT INTO invoice VALUES("90","68","68","-","28","","","surat Ahmd. trans  \"CC Attached\"- KADODARA","2017-09-12","26","","","3744.00","0.00","0.00","4418.00","0","18","0","0.00","673.92","0.00","2017-09-12","2017-09-12","0.08");
INSERT INTO invoice VALUES("91","69","69","-","14","","","surat Ahmd. trans  \"CC Attached\"- MAKARPURA","2017-09-12","12","","","19464.00","0.00","0.00","22968.00","0","18","0","0.00","3503.52","0.00","2017-09-12","2017-09-12","0.48");
INSERT INTO invoice VALUES("92","70","70","95","18","","","","2017-09-12","16","","","5400.00","0.00","0.00","6372.00","0","18","0","0.00","972.00","0.00","2017-09-12","2017-08-18","0.00");
INSERT INTO invoice VALUES("93","71","71","RPUR1718/11700587","31","","","","0000-00-00","29","","","9170.00","0.00","0.00","10821.00","9","0","9","825.30","0.00","825.30","2017-09-12","2017-09-07","0.40");
INSERT INTO invoice VALUES("94","72","72","-","32","","","","2017-09-13","30","","","990.00","0.00","0.00","1168.00","0","18","0","0.00","178.20","0.00","2017-09-13","2017-09-13","-0.20");
INSERT INTO invoice VALUES("95","73","73","phone","24","","","","0000-00-00","22","","","2400.00","0.00","0.00","2832.00","0","18","0","0.00","432.00","0.00","2017-09-14","2017-09-14","0.00");
INSERT INTO invoice VALUES("96","74","74","-","14","","","surat Ahmd. trans  \"CC Attached\" MAKARPURA","2017-09-14","12","","","11421.00","0.00","0.00","13477.00","0","18","0","0.00","2055.78","0.00","2017-09-14","2017-09-12","0.22");
INSERT INTO invoice VALUES("97","75","75","-","30","","","","0000-00-00","28","","","609.00","0.00","0.00","719.00","9","0","9","54.81","0.00","54.81","2017-09-15","2017-09-15","0.38");
INSERT INTO invoice VALUES("98","76","76","136 & 165","18","","","","2017-09-15","16","","","6854.00","0.00","0.00","8088.00","0","18","0","0.00","1233.72","0.00","2017-09-15","2017-09-12","0.28");
INSERT INTO invoice VALUES("99","77","77","phone","32","","","","0000-00-00","30","","","540.00","0.00","0.00","637.00","0","18","0","0.00","97.20","0.00","2017-09-15","2017-09-15","-0.20");
INSERT INTO invoice VALUES("100","78","78","-","34","","","","0000-00-00","31","","","360.00","0.00","0.00","425.00","9","0","9","32.40","0.00","32.40","2017-09-15","2017-09-15","0.20");
INSERT INTO invoice VALUES("101","79","79","phone","8","","","","2017-09-16","6","","","3240.00","0.00","0.00","3823.00","0","18","0","0.00","583.20","0.00","2017-09-16","2017-09-15","-0.20");
INSERT INTO invoice VALUES("102","80","80","-","35","","","","0000-00-00","32","","","4990.00","0.00","0.00","5888.00","9","0","9","449.10","0.00","449.10","2017-09-16","2017-09-16","-0.20");
INSERT INTO invoice VALUES("103","81","81","phone","24","","","","0000-00-00","22","","","210.00","0.00","0.00","248.00","0","18","0","0.00","37.80","0.00","2017-09-16","2017-09-16","0.20");
INSERT INTO invoice VALUES("104","82","82","-","36","","","","0000-00-00","33","","","720.00","0.00","0.00","850.00","9","0","9","64.80","0.00","64.80","2017-09-19","2017-09-19","0.40");
INSERT INTO invoice VALUES("105","83","83","-","10","","","","2017-09-19","8","","","780.00","0.00","0.00","920.00","0","18","0","0.00","140.40","0.00","2017-09-19","2017-09-19","-0.40");
INSERT INTO invoice VALUES("106","84","84","-","15","","","","2017-09-20","13","","","1512.00","0.00","0.00","1784.00","0","18","0","0.00","272.16","0.00","2017-09-20","2017-09-18","-0.16");
INSERT INTO invoice VALUES("107","85","85","142","37","","","surat Ahmd. trans  \"CC Attached\" TARAPUR","2017-09-22","34","","","10350.00","0.00","0.00","12213.00","0","18","0","0.00","1863.00","0.00","2017-09-22","2017-09-06","0.00");
INSERT INTO invoice VALUES("108","86","86","TS/KDR/10","39","","","surat Ahmd. trans  \"CC Attached\"  KADODARA","2017-09-22","35","","","13080.00","0.00","0.00","15434.00","0","18","0","0.00","2354.40","0.00","2017-09-22","2017-09-16","-0.40");
INSERT INTO invoice VALUES("109","87","87","-","4","","","","0000-00-00","2","","","2160.00","0.00","0.00","2549.00","0","18","0","0.00","388.80","0.00","2017-09-23","2017-09-06","0.20");
INSERT INTO invoice VALUES("110","88","88","119","17","","","","2017-09-25","15","","","3891.00","0.00","0.00","4591.00","0","18","0","0.00","700.38","0.00","2017-09-25","2017-09-22","-0.38");
INSERT INTO invoice VALUES("111","89","89","EMAIL","40","","","","2017-09-25","36","","","10881.00","0.00","0.00","12840.00","0","18","0","0.00","1958.58","0.00","2017-09-25","2017-09-22","0.42");
INSERT INTO invoice VALUES("112","90","90","phone","8","","","","2017-09-26","6","","","9600.00","0.00","0.00","11328.00","0","18","0","0.00","1728.00","0.00","2017-09-26","2017-09-23","0.00");
INSERT INTO invoice VALUES("113","91","91","-","41","","","","2017-09-27","37","","","540.00","0.00","0.00","637.00","0","18","0","0.00","97.20","0.00","2017-09-27","2017-09-27","-0.20");
INSERT INTO invoice VALUES("114","92","92","200","12","","","","2017-09-27","10","","","22489.50","0.00","0.00","26538.00","0","18","0","0.00","4048.11","0.00","2017-09-27","2017-09-23","0.39");
INSERT INTO invoice VALUES("115","93","93","-","42","","","","2017-09-27","38","","","960.00","0.00","0.00","1133.00","0","18","0","0.00","172.80","0.00","2017-09-27","2017-09-26","0.20");
INSERT INTO invoice VALUES("116","94","94","-","34","","","","2017-09-28","31","","","540.00","0.00","0.00","637.00","9","0","9","48.60","0.00","48.60","2017-09-28","2017-09-28","-0.20");
INSERT INTO invoice VALUES("122","95","95","-","25","","","","0000-00-00","23","","","1920.00","0.00","0.00","2266.00","0","18","0","0.00","345.60","0.00","2017-09-28","2017-09-28","0.40");
INSERT INTO invoice VALUES("123","96","96","-","20","","","","0000-00-00","18","","","5485.00","0.00","0.00","6472.00","9","0","9","493.65","0.00","493.65","2017-09-29","2017-09-27","-0.30");
INSERT INTO invoice VALUES("124","97","97","363","4","","","","0000-00-00","2","","","5300.00","0.00","0.00","6254.00","0","18","0","0.00","954.00","0.00","2017-09-29","2017-09-27","0.00");
INSERT INTO invoice VALUES("125","98","98","-","15","","","","2017-09-29","13","","","9300.00","0.00","0.00","10974.00","0","18","0","0.00","1674.00","0.00","2017-09-29","2017-09-18","0.00");
INSERT INTO invoice VALUES("126","99","99","PHONE","19","","","","2017-10-02","17","","","5662.50","0.00","0.00","6682.00","0","18","0","0.00","1019.25","0.00","2017-10-02","2017-10-02","0.25");
INSERT INTO invoice VALUES("127","100","100","-","8","","","","2017-10-03","6","","","870.00","0.00","0.00","1027.00","0","18","0","0.00","156.60","0.00","2017-10-03","2017-10-03","0.40");
INSERT INTO invoice VALUES("128","101","101","209","18","","","","2017-10-04","16","","","9180.00","0.00","0.00","10832.00","0","18","0","0.00","1652.40","0.00","2017-10-04","2017-10-01","-0.40");
INSERT INTO invoice VALUES("129","102","102","-","25","","","","0000-00-00","23","","","2640.00","0.00","0.00","3115.00","0","18","0","0.00","475.20","0.00","2017-10-04","2017-09-28","-0.20");
INSERT INTO invoice VALUES("130","103","103","-","44","","","","0000-00-00","40","","","2600.00","0.00","0.00","3068.00","0","18","0","0.00","468.00","0.00","2017-10-06","2017-10-05","0.00");
INSERT INTO invoice VALUES("131","104","104","-","43","","","","2017-10-06","39","","","1650.00","0.00","0.00","1947.00","0","18","0","0.00","297.00","0.00","2017-10-06","2017-10-06","0.00");
INSERT INTO invoice VALUES("132","105","105","Telephone","19","","","","2017-10-09","17","","","8662.50","0.00","0.00","10222.00","0","18","0","0.00","1559.25","0.00","2017-10-09","2017-10-06","0.25");
INSERT INTO invoice VALUES("133","106","106","-","10","","","","2017-10-09","8","","","2240.00","0.00","0.00","2643.00","0","18","0","0.00","403.20","0.00","2017-10-09","2017-10-09","-0.20");
INSERT INTO invoice VALUES("134","107","107","PHONE","45","","","","0000-00-00","41","","","990.00","0.00","0.00","1168.00","0","18","0","0.00","178.20","0.00","2017-10-09","2017-10-09","-0.20");
INSERT INTO invoice VALUES("135","108","108","191","37","","","","2017-10-10","34","","","34245.00","0.00","0.00","40409.00","0","18","0","0.00","6164.10","0.00","2017-10-10","2017-10-02","-0.10");
INSERT INTO invoice VALUES("136","109","109","232","18","","","","0000-00-00","16","","","10350.00","0.00","0.00","12213.00","0","18","0","0.00","1863.00","0.00","2017-10-10","2017-10-08","0.00");
INSERT INTO invoice VALUES("137","110","110","PHONE","46","","","","0000-00-00","42","","","615.00","0.00","0.00","726.00","0","18","0","0.00","110.70","0.00","2017-10-12","2017-10-10","0.30");
INSERT INTO invoice VALUES("138","111","111","Email","47","","","surat Ahmd. trans \"SACHIN\"","2017-10-12","43","","","43602.00","0.00","0.00","51450.00","0","18","0","0.00","7848.36","0.00","2017-10-12","2017-10-09","-0.36");
INSERT INTO invoice VALUES("139","110","112","PHONE","46","","","","1970-01-01","42","","","2115.00","0.00","0.00","2496.00","0","18","0","0.00","380.70","0.00","2017-10-15","2017-10-10","0.30");
INSERT INTO invoice VALUES("140","110","113","PHONE","46","","","","1970-01-01","42","","","2115.00","0.00","0.00","2496.00","0","18","0","0.00","380.70","0.00","2017-10-15","2017-10-10","0.30");
INSERT INTO invoice VALUES("141","110","114","PHONE","46","","","","1970-01-01","42","","","2115.00","0.00","0.00","2496.00","0","18","0","0.00","380.70","0.00","2017-10-15","2017-10-10","0.30");





CREATE TABLE `invoice_desc` (
  `quotdesc_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_id` varchar(100) NOT NULL,
  `item_desc` varchar(500) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `tax_val` varchar(255) NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`quotdesc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=416 DEFAULT CHARSET=latin1;

INSERT INTO invoice_desc VALUES("45","23","250/5, 5 VA Cl. 1.0 Model (SA3010) Nylone Caising ","9","pcs","224.00","2016.00","0","2016.00","2017-07-17 14:23:19");
INSERT INTO invoice_desc VALUES("46","24","600/5 ,5VACl.0.5(ID-80mm) Tape wound C.T","3","pcs","245.00","735.00","0","735.00","2017-07-17 14:41:00");
INSERT INTO invoice_desc VALUES("47","24","300/5,5VACl.0.5(ID-55 mm) Tape wound C.T","3","pcs","245.00","735.00","0","735.00","2017-07-17 14:41:00");
INSERT INTO invoice_desc VALUES("48","25","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","3","pcs","210.00","630.00","0","630.00","2017-07-17 14:47:57");
INSERT INTO invoice_desc VALUES("49","25","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","6","pcs","195.00","1170.00","0","1170.00","2017-07-17 14:47:57");
INSERT INTO invoice_desc VALUES("50","26","100/5,2.5VACl.1.0Model (SA3010) Nylone Caising","15","pcs","200.00","3000.00","0","3000.00","2017-07-17 15:05:58");
INSERT INTO invoice_desc VALUES("51","26","150/5,2.5VACl.1.0Model (SA3010) Nylone Caising ","9","pcs","200.00","1800.00","0","1800.00","2017-07-17 15:05:58");
INSERT INTO invoice_desc VALUES("52","26","250/5,5VACl.1.0Model (SA3010) Nylone Caising ","9","pcs","210.00","1890.00","0","1890.00","2017-07-17 15:05:58");
INSERT INTO invoice_desc VALUES("53","26","800/5,5VACl.1.0Model (SA8015) Nylone Caising ","3","pcs","260.00","780.00","0","780.00","2017-07-17 15:05:58");
INSERT INTO invoice_desc VALUES("54","26","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","200.00","600.00","0","600.00","2017-07-17 15:05:58");
INSERT INTO invoice_desc VALUES("55","27","5000/5,15VACl.0.5(ID-270mm) Tape wound C.T ","3","pcs","1650.00","4950.00","0","4950.00","2017-07-17 15:16:56");
INSERT INTO invoice_desc VALUES("56","28","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","9","pcs","202.00","1818.00","0","1818.00","2017-07-17 15:44:54");
INSERT INTO invoice_desc VALUES("57","28","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","9","pcs","202.00","1818.00","0","1818.00","2017-07-17 15:44:54");
INSERT INTO invoice_desc VALUES("58","28","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","202.00","606.00","0","606.00","2017-07-17 15:44:54");
INSERT INTO invoice_desc VALUES("59","29","3000/5,15VA Cl.1.0,Rect.(150 x75) Tape wound C.T ","3","pcs","840.00","2520.00","0","2520.00","2017-07-17 16:37:54");
INSERT INTO invoice_desc VALUES("60","29","1250/5,15VA,Cl.1.0, Rect.(60 x 40) Tape wound C.T ","3","pcs","300.00","900.00","0","900.00","2017-07-17 16:37:54");
INSERT INTO invoice_desc VALUES("61","29","250/5,15VA, Cl.1.0, (ID-45mm) Tape wound C.T ","3","pcs","312.00","936.00","0","936.00","2017-07-17 16:37:54");
INSERT INTO invoice_desc VALUES("62","30","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T ","12","pcs","172.50","2070.00","0","2070.00","2017-07-18 14:05:34");
INSERT INTO invoice_desc VALUES("63","30","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T ","6","pcs","165.00","990.00","0","990.00","2017-07-18 14:05:34");
INSERT INTO invoice_desc VALUES("64","30","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T ","12","pcs","165.00","1980.00","0","1980.00","2017-07-18 14:05:34");
INSERT INTO invoice_desc VALUES("65","30","400/5,5VACl.1.0(ID-60mm) Tape wound C.T ","18","pcs","180.00","3240.00","0","3240.00","2017-07-18 14:05:34");
INSERT INTO invoice_desc VALUES("66","30","600/5,5VA ,Cl.1.0 (ID-65 mm) Tape wound C.T ","6","pcs","195.00","1170.00","0","1170.00","2017-07-18 14:05:34");
INSERT INTO invoice_desc VALUES("67","31","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T ","3","pcs","156.00","468.00","0","468.00","2017-07-18 14:23:12");
INSERT INTO invoice_desc VALUES("68","32","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","9","pcs","180.00","1620.00","0","1620.00","2017-07-18 14:39:38");
INSERT INTO invoice_desc VALUES("69","32","1000/5,7.5VA ,Cl.1.0 (ID-80mm) Tape wound C.T","9","pcs","210.00","1890.00","0","1890.00","2017-07-18 14:39:38");
INSERT INTO invoice_desc VALUES("70","32","2000/5,15VA ,Cl.1.0 (ID-115mm) Tape wound C.T ","6","pcs","500.00","3000.00","0","3000.00","2017-07-18 14:39:38");
INSERT INTO invoice_desc VALUES("71","33","1000/5,10VA ,Cl.1.0 Model (SA8015) Nylone Caising ","9","pcs","315.00","2835.00","0","2835.00","2017-07-19 15:04:55");
INSERT INTO invoice_desc VALUES("72","33","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Caising ","12","pcs","260.00","3120.00","0","3120.00","2017-07-19 15:04:55");
INSERT INTO invoice_desc VALUES("73","33","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","24","pcs","200.00","4800.00","0","4800.00","2017-07-19 15:04:55");
INSERT INTO invoice_desc VALUES("74","33","800/5,10VA ,Cl.1.0 (ID-60mm) Tape wound C.T  with connector","9","pcs","215.00","1935.00","0","1935.00","2017-07-19 15:04:55");
INSERT INTO invoice_desc VALUES("75","34","2500/5,15VA ,Cl.1.0 Rect.(130 x60) Tape wound C.T ","3","pcs","650.00","1950.00","0","1950.00","2017-07-19 15:16:46");
INSERT INTO invoice_desc VALUES("76","35","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","45","pcs","156.00","7020.00","0","7020.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("77","35","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","21","pcs","143.00","3003.00","0","3003.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("78","35","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","30","pcs","200.00","6000.00","0","6000.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("79","35","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("80","35","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("81","35","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","51","pcs","143.00","7293.00","0","7293.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("82","35","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-07-20 14:06:28");
INSERT INTO invoice_desc VALUES("83","36","60/1,2.5VA, Cl.1.0, (ID-20mm), Tape wound C.T with connector","3","pcs","295.00","885.00","0","885.00","2017-07-20 16:07:55");
INSERT INTO invoice_desc VALUES("84","36","80/1,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","4","pcs","285.00","1140.00","0","1140.00","2017-07-20 16:07:55");
INSERT INTO invoice_desc VALUES("85","36","1600/5,15VA, Cl.1.0, Rect.(65 x90), Tape wound C.T with connector","9","pcs","415.00","3735.00","0","3735.00","2017-07-20 16:07:55");
INSERT INTO invoice_desc VALUES("86","37","600/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","3","pcs","360.00","1080.00","0","1080.00","2017-07-20 16:30:00");
INSERT INTO invoice_desc VALUES("87","37","2500/5,15VA, Cl.1.0, Rect.(175 x90), Tape wound C.T","1","pcs","1250.00","1250.00","0","1250.00","2017-07-20 16:30:00");
INSERT INTO invoice_desc VALUES("88","38","1250/5,15VA, Cl.1.0, Rect.(80x65mm), Tape wound C.T","4","pcs","470.00","1880.00","0","1880.00","2017-07-20 17:09:57");
INSERT INTO invoice_desc VALUES("89","38","1600/5,15VA, Cl.1.0, Rect.(80 x65mm), Tape wound C.T","9","pcs","560.00","5040.00","0","5040.00","2017-07-20 17:09:57");
INSERT INTO invoice_desc VALUES("90","38","1600/5,15VA, Cl.1.0, Rect.(150 x70MM), Tape wound C.T","3","pcs","590.00","1770.00","0","1770.00","2017-07-20 17:09:57");
INSERT INTO invoice_desc VALUES("91","38","2000/5,15VA, Cl.1.0, Rect.(150 x70MM), Tape wound C.T","3","pcs","825.00","2475.00","0","2475.00","2017-07-20 17:09:57");
INSERT INTO invoice_desc VALUES("92","39","200/5,5VA, Cl.1.0, Model (SA3010), Nylone Caising","12","pcs","210.00","2520.00","0","2520.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("93","39","800/5,5VACl.1.0Model (SA8015) Nylone Caising","9","pcs","270.00","2430.00","0","2430.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("94","39","1000/5,7.5VA, Cl.1.0, Model (SA8015), Nylone Caising","6","pcs","280.00","1680.00","0","1680.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("95","39","1200/5,15VA, Cl.1.0, Model (SA10030), Nylone Caising","6","pcs","410.00","2460.00","0","2460.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("96","39","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","15","pcs","188.00","2820.00","0","2820.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("97","39","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","12","pcs","188.00","2256.00","0","2256.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("98","39","300/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","12","pcs","188.00","2256.00","0","2256.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("99","39","500/5,5VA, Cl.1.0, (ID-60mm) with connector, Tape wound C.T","6","pcs","188.00","1128.00","0","1128.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("100","39","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","6","pcs","188.00","1128.00","0","1128.00","2017-07-21 14:13:20");
INSERT INTO invoice_desc VALUES("101","40","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","3","pcs","185.00","555.00","0","555.00","2017-07-21 16:40:43");
INSERT INTO invoice_desc VALUES("102","40","400/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T with connector","3","pcs","200.00","600.00","0","600.00","2017-07-21 16:40:43");
INSERT INTO invoice_desc VALUES("103","41","100/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T with Connector","2","pcs","180.00","360.00","0","360.00","2017-07-22 16:42:28");
INSERT INTO invoice_desc VALUES("104","41","300/5,5VA, Cl.1.0, (ID-50mm) Tape wound C.T with connector","1","pcs","195.00","195.00","0","195.00","2017-07-22 16:42:28");
INSERT INTO invoice_desc VALUES("105","42","1200/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","1","pcs","330.00","330.00","0","330.00","2017-07-24 12:55:45");
INSERT INTO invoice_desc VALUES("106","43","1000/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T with Connector","3","pcs","360.00","1080.00","0","1080.00","2017-07-24 12:58:21");
INSERT INTO invoice_desc VALUES("107","44","100/5,2.5VA, Cl.1.0, (ID-45mm), Tape wound C.T","15","pcs","200.00","3000.00","0","3000.00","2017-07-24 13:34:35");
INSERT INTO invoice_desc VALUES("108","44","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","15","pcs","180.00","2700.00","0","2700.00","2017-07-24 13:34:35");
INSERT INTO invoice_desc VALUES("109","44","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","15","pcs","180.00","2700.00","0","2700.00","2017-07-24 13:34:35");
INSERT INTO invoice_desc VALUES("110","45","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","3","pcs","165.00","495.00","0","495.00","2017-07-24 14:06:07");
INSERT INTO invoice_desc VALUES("111","45","160/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T","3","pcs","175.00","525.00","0","525.00","2017-07-24 14:06:07");
INSERT INTO invoice_desc VALUES("112","46","3200/5,15VA, Cl.1.0, Rect.(150 x80MM), Tape wound C.T with Connector","1","pcs","1050.00","1050.00","0","1050.00","2017-07-25 12:04:47");
INSERT INTO invoice_desc VALUES("113","47","2500/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T","6","pcs","600.00","3600.00","0","3600.00","2017-07-27 13:57:28");
INSERT INTO invoice_desc VALUES("114","47","1000/5, 5VA, Cl.1.0, (ID-90mm), Tape wound C.T","36","pcs","220.00","7920.00","0","7920.00","2017-07-27 13:57:28");
INSERT INTO invoice_desc VALUES("115","48","1000/5,10VA, Cl.1.0, (ID-105mm), Tape wound C.T","3","pcs","280.00","840.00","0","840.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("116","48","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","6","pcs","195.00","1170.00","0","1170.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("117","48","250/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","18","pcs","180.00","3240.00","0","3240.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("118","48","125/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T","6","pcs","180.00","1080.00","0","1080.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("119","48","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","45","pcs","165.00","7425.00","0","7425.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("120","48","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","24","pcs","180.00","4320.00","0","4320.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("121","48","25/5,2.5VA, Cl.5.0, (ID-30mm), Tape wound C.T","6","pcs","260.00","1560.00","0","1560.00","2017-07-28 15:02:13");
INSERT INTO invoice_desc VALUES("122","49","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-07-28 15:09:58");
INSERT INTO invoice_desc VALUES("123","50","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","24","pcs","145.00","3480.00","0","3480.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("124","50","30/5(4T),2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","54","pcs","135.00","7290.00","0","7290.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("125","50","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","6","pcs","135.00","810.00","0","810.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("126","50","160/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","39","pcs","135.00","5265.00","0","5265.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("127","50","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","39","pcs","150.00","5850.00","0","5850.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("128","50","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-07-31 12:32:02");
INSERT INTO invoice_desc VALUES("129","51","1666/5,15VA, Cl.1.0, Rect.(140x80MM), Tape wound C.T","1","pcs","600.00","600.00","0","600.00","2017-08-01 13:04:34");
INSERT INTO invoice_desc VALUES("130","52","800/5,5VA, Cl.1.0, (ID-60mm), Tape wound C.T with Connector","3","pcs","225.00","675.00","0","675.00","2017-08-01 13:41:29");
INSERT INTO invoice_desc VALUES("131","52","400/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T with connector","6","pcs","210.00","1260.00","0","1260.00","2017-08-01 13:41:29");
INSERT INTO invoice_desc VALUES("132","53","1200/5,15VA, Cl.1.0, Rect.(60x40), Tape wound C.T with Connector","3","pcs","325.00","975.00","0","975.00","2017-08-01 15:02:26");
INSERT INTO invoice_desc VALUES("133","53","1200/5,15VA, Cl.5P10, (ID-80mm), Tape wound C.T with connector","3","pcs","990.00","2970.00","0","2970.00","2017-08-01 15:02:26");
INSERT INTO invoice_desc VALUES("134","54","1200/5,15VA, Cl.1.0, Model (SA10030), Nylone Caising","6","pcs","410.00","2460.00","0","2460.00","2017-08-01 16:51:04");
INSERT INTO invoice_desc VALUES("135","55","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylone Caising","6","pcs","200.00","1200.00","0","1200.00","2017-08-02 15:24:05");
INSERT INTO invoice_desc VALUES("136","55","40/5(2T),2.5VA, Cl.1.0, Model (SA3R20), Nylone Caising","18","pcs","200.00","3600.00","0","3600.00","2017-08-02 15:24:05");
INSERT INTO invoice_desc VALUES("137","55","50/5,1VA, Cl.1.0, Model (SA3R20), Nylone Caising","3","pcs","200.00","600.00","0","600.00","2017-08-02 15:24:05");
INSERT INTO invoice_desc VALUES("138","55","150/5,2.5VACl.1.0Model (SA3010) Nylone Caising","6","pcs","200.00","1200.00","0","1200.00","2017-08-02 15:24:05");
INSERT INTO invoice_desc VALUES("139","55","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","3","pcs","200.00","600.00","0","600.00","2017-08-02 15:24:05");
INSERT INTO invoice_desc VALUES("140","56","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-08-03 16:56:05");
INSERT INTO invoice_desc VALUES("141","56","160/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T","6","pcs","175.00","1050.00","0","1050.00","2017-08-03 16:56:05");
INSERT INTO invoice_desc VALUES("142","57","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","36","pcs","200.00","7200.00","0","7200.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("143","57","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","30","pcs","143.00","4290.00","0","4290.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("144","57","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("145","57","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("146","57","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("147","57","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("148","57","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("149","57","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-04 14:44:41");
INSERT INTO invoice_desc VALUES("150","58","600/5,10VA, Cl.1.0, (ID-50MM), Tape wound C.T","9","pcs","230.00","2070.00","0","2070.00","2017-08-04 15:02:11");
INSERT INTO invoice_desc VALUES("151","58","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","9","pcs","165.00","1485.00","0","1485.00","2017-08-04 15:02:11");
INSERT INTO invoice_desc VALUES("152","59","400/5,10VA, Cl.1.0, (ID-55MM), Tape wound C.T","6","pcs","230.00","1380.00","0","1380.00","2017-08-05 13:46:18");
INSERT INTO invoice_desc VALUES("153","59","125/5,5VA, Cl.1.0, (ID-30MM), Tape wound C.T","1","pcs","220.00","220.00","0","220.00","2017-08-05 13:46:18");
INSERT INTO invoice_desc VALUES("154","59","250/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","15","pcs","180.00","2700.00","0","2700.00","2017-08-05 13:46:18");
INSERT INTO invoice_desc VALUES("155","59","160/5,5VA, Cl.1.0, (ID-30MM), Tape wound C.T","5","pcs","210.00","1050.00","0","1050.00","2017-08-05 13:46:18");
INSERT INTO invoice_desc VALUES("156","59","100/5,5VA, Cl.1.0, Model (SA3012), Nylone Caising","12","pcs","265.00","3180.00","0","3180.00","2017-08-05 13:46:18");
INSERT INTO invoice_desc VALUES("157","60","200/5,10VA, Cl.1.0, (ID-55MM), Tape wound C.T","6","pcs","290.00","1740.00","0","1740.00","2017-08-08 12:32:20");
INSERT INTO invoice_desc VALUES("158","61","1000/5,7.5VA, Cl.1.0, (ID-80MM), Tape wound C.T with Connector","4","pcs","225.00","900.00","0","900.00","2017-08-09 13:02:21");
INSERT INTO invoice_desc VALUES("159","61","30/5,2.5VA, Cl.5.0, (ID-20MM), Tape wound C.T with Connector","1","pcs","235.00","235.00","0","235.00","2017-08-09 13:02:21");
INSERT INTO invoice_desc VALUES("160","61","300/5,5VA, Cl.1.0, (ID-50mm) Tape wound C.T with connector","3","pcs","195.00","585.00","0","585.00","2017-08-09 13:02:21");
INSERT INTO invoice_desc VALUES("161","62","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("162","62","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","21","pcs","143.00","3003.00","0","3003.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("163","62","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","21","pcs","200.00","4200.00","0","4200.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("164","62","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","15","pcs","143","2145.00","0","2145.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("165","62","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","149.50","2242.50","0","2242.50","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("166","62","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("167","62","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-08-10 16:18:57");
INSERT INTO invoice_desc VALUES("168","63","2000/5,15VA ,Cl.1.0 (ID-115mm) Tape wound C.T","3","pcs","476.00","1428.00","0","1428.00","2017-08-12 14:02:53");
INSERT INTO invoice_desc VALUES("169","64","1000/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","6","pcs","260.00","1560.00","0","1560.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("170","64","1250/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","6","pcs","340.00","2040.00","0","2040.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("171","64","400/5,10VA, Cl.1.0, (ID-55mm), Tape wound C.T with connector","12","pcs","245.00","2940.00","0","2940.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("172","64","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T with connector","6","pcs","245.00","1470.00","0","1470.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("173","64","250/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with connector","6","pcs","245.00","1470.00","0","1470.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("174","64","160/5,10VA, Cl.1.0, (ID-35mm), Tape wound C.T with connector","6","pcs","290.00","1740.00","0","1740.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("175","64","60/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","16","pcs","265.00","4240.00","0","4240.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("176","64","125/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","6","pcs","230.00","1380.00","0","1380.00","2017-08-14 10:36:58");
INSERT INTO invoice_desc VALUES("177","65","30/5,2.5VA, Cl.5.0, (ID-20mm), Tape wound C.T","12","pcs","224.00","2688.00","0","2688.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("178","65","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","144.00","2160.00","0","2160.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("179","65","75/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T","21","pcs","132.00","2772.00","0","2772.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("180","65","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","39","pcs","132.00","5148.00","0","5148.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("181","65","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","15","pcs","132.00","1980.00","0","1980.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("182","65","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","12","pcs","144.00","1728.00","0","1728.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("183","65","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","12","pcs","144.00","1728.00","0","1728.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("184","65","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","18","pcs","144.00","2592.00","0","2592.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("185","65","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","6","pcs","156.00","936.00","0","936.00","2017-08-14 15:40:05");
INSERT INTO invoice_desc VALUES("186","66","2500/5,15VA, Cl.1.0, Rect.(105 x80), Tape wound C.T with Connector","3","pcs","760.00","2280.00","0","2280.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("187","66","1200/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T with Connector","6","pcs","440.00","2640.00","0","2640.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("188","66","800/5,15VA, Cl.1.0, Rect.(60 x40), Tape wound C.T with Connector","3","pcs","275.00","825.00","0","825.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("189","66","400/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","2","pcs","255.00","510.00","0","510.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("190","66","300/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","1","pcs","240.00","240.00","0","240.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("191","66","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","3","pcs","200.00","600.00","0","600.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("192","66","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","1","pcs","185.00","185.00","0","185.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("193","66","150/5,5VA, Cl.1.0, Model (SA3012), Nylone Casing","2","pcs","255.00","510.00","0","510.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("194","66","100/5,5VA, Cl.1.0, Model (SA3012), Nylone Caising","4","pcs","275.00","1100.00","0","1100.00","2017-08-16 15:00:10");
INSERT INTO invoice_desc VALUES("195","67","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","15","pcs","165.00","2475.00","0","2475.00","2017-08-17 13:39:54");
INSERT INTO invoice_desc VALUES("196","67","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","18","pcs","180.00","3240.00","0","3240.00","2017-08-17 13:39:54");
INSERT INTO invoice_desc VALUES("197","67","600/5,5VA ,Cl.1.0 (ID-65 mm) Tape wound C.T","6","pcs","195.00","1170.00","0","1170.00","2017-08-17 13:39:54");
INSERT INTO invoice_desc VALUES("198","67","2000/5,15VA, Cl.1.0, Rect.(110 x80), Tape wound C.T","4","pcs","560.00","2240.00","0","2240.00","2017-08-17 13:39:54");
INSERT INTO invoice_desc VALUES("199","68","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","24","pcs","172.50","4140.00","0","4140.00","2017-08-18 13:26:23");
INSERT INTO invoice_desc VALUES("200","69","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","3","pcs","195.00","585.00","0","585.00","2017-08-18 13:39:24");
INSERT INTO invoice_desc VALUES("201","69","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","202.00","606.00","0","606.00","2017-08-18 13:39:24");
INSERT INTO invoice_desc VALUES("202","69","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","3","pcs","180.00","540.00","0","540.00","2017-08-18 13:39:24");
INSERT INTO invoice_desc VALUES("203","69","125/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","3","pcs","220.00","660.00","0","660.00","2017-08-18 13:39:24");
INSERT INTO invoice_desc VALUES("204","69","60/5,5VA, Cl.3.0, (ID-30mm), Tape wound C.T with Connector","6","pcs","265.00","1590.00","0","1590.00","2017-08-18 13:39:24");
INSERT INTO invoice_desc VALUES("205","70","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","6","pcs","202.00","1212.00","0","1212.00","2017-08-22 14:35:48");
INSERT INTO invoice_desc VALUES("206","70","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","202.00","606.00","0","606.00","2017-08-22 14:35:48");
INSERT INTO invoice_desc VALUES("207","71","200/5,5VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","3","pcs","225.00","675.00","0","675.00","2017-08-23 17:09:09");
INSERT INTO invoice_desc VALUES("208","72","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","18","pcs","149.50","2691.00","0","2691.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("209","72","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","18","pcs","156.00","2808.00","0","2808.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("210","72","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","36","pcs","143.00","5148.00","0","5148.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("211","72","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","18","pcs","143.00","2574.00","0","2574.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("212","72","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","18","pcs","156.00","2808.00","0","2808.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("213","72","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","24","pcs","156.00","3744.00","0","3744.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("214","72","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","24","pcs","169.00","4056.00","0","4056.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("215","72","1000/5,7.5VA ,Cl.1.0 (ID-80mm) Tape wound C.T","12","pcs","182.00","2184.00","0","2184.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("216","72","1200/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T","9","pcs","357.50","3217.50","0","3217.50","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("217","72","1600/5,15VA, Cl.1.0, (ID-150mm), Tape wound C.T","6","pcs","455.00","2730.00","0","2730.00","2017-08-24 14:01:56");
INSERT INTO invoice_desc VALUES("218","73","800/1,10VA, Cl.0.2, Model (SA8015), Nylone Casing","3","pcs","575.00","1725.00","0","1725.00","2017-08-28 16:05:16");
INSERT INTO invoice_desc VALUES("219","74","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","9","pcs","200.00","1800.00","0","1800.00","2017-08-30 16:18:38");
INSERT INTO invoice_desc VALUES("220","74","250/5, 5 VA Cl. 1.0 Model (SA3010) Nylone Caising","24","pcs","205.00","4920.00","0","4920.00","2017-08-30 16:18:38");
INSERT INTO invoice_desc VALUES("221","75","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","21","pcs","188.00","3948.00","0","3948.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("222","75","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","21","pcs","188.00","3948.00","0","3948.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("223","75","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T with Connector","12","pcs","174.00","2088.00","0","2088.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("224","75","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","15","pcs","174.00","2610.00","0","2610.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("225","75","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","21","pcs","174.00","3654.00","0","3654.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("226","75","600/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","12","pcs","220.00","2640.00","0","2640.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("227","75","800/5,15VA, Cl.0.5, (ID-80mm), Tape wound C.T with Connector","12","pcs","310.00","3720.00","0","3720.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("228","75","400/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","12","pcs","220.00","2640.00","0","2640.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("229","75","500/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","12","pcs","220.00","2640.00","0","2640.00","2017-08-31 13:21:55");
INSERT INTO invoice_desc VALUES("230","76","50/5,2.5VA, Cl.0.5, (4 w), Tape wound C.T","2","pcs","300.00","600.00","0","600.00","2017-08-31 15:54:40");
INSERT INTO invoice_desc VALUES("231","77","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","3","pcs","180.00","540.00","0","540.00","2017-09-01 15:50:10");
INSERT INTO invoice_desc VALUES("232","77","125/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","3","pcs","220.00","660.00","0","660.00","2017-09-01 15:50:10");
INSERT INTO invoice_desc VALUES("233","78","30/5,2.5VA, Cl.5.0, (ID-20MM), Tape wound C.T with Connector","2","pcs","235.00","470.00","0","470.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("234","78","60/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T with connector","7","pcs","195.00","1365.00","0","1365.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("235","78","100/5,2.5VA,Cl.1.0,(ID-30mm),Tape wound C.T with Conn.","24","pcs","180.00","4320.00","0","4320.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("236","78","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","12","pcs","180.00","2160.00","0","2160.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("237","78","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","30","pcs","180.00","5400.00","0","5400.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("238","78","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","1","pcs","195.00","195.00","0","195.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("239","78","300/5,5VA, Cl.1.0, (ID-50mm) Tape wound C.T with connector","6","pcs","195.00","1170.00","0","1170.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("240","78","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","6","pcs","210.00","1260.00","0","1260.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("241","78","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","6","pcs","210.00","1260.00","0","1260.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("242","78","1200/5,15VA,Cl.1.0,(ID-115mm),Tape wound C.T with conn.","4","pcs","330.00","1320.00","0","1320.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("243","78","2000/5,15VA,Cl.1.0,(ID-115mm),Tape wound C.T with conn.","6","pcs","476.00","2856.00","0","2856.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("244","78","1000/1,15VA,Cl.1.0,(ID-80mm),Tape wound C.T with conn.","3","pcs","340.00","1020.00","0","1020.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("245","78","1600/1,15VA, Cl.1.0, (ID-115mm), Tape wound C.T with conn.","4","pcs","505.00","2020.00","0","2020.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("246","78","400/1,15VA,Cl.1.0,Rect.(60 x40),Tape wound C.T with conn.","4","pcs","280.00","1120.00","0","1120.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("247","78","800/1,15VA, Cl.1.0,(ID-80MM),Tape wound C.T with connector","3","pcs","310.00","930.00","0","930.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("248","78","4000/5,15VA,Cl.1.0,Rect.(175x80MM),Tape wound C.T with conn.","7","pcs","1250.00","8750.00","0","8750.00","2017-09-02 12:10:31");
INSERT INTO invoice_desc VALUES("249","79","250/5, 5 VA Cl. 1.0 Model (SA3010) Nylone Caising","6","pcs","205.00","1230.00","0","1230.00","2017-09-02 13:35:04");
INSERT INTO invoice_desc VALUES("250","79","600/5,5VA, Cl.1.0, (ID-65mm), Tape wound C.T with connector","9","pcs","210.00","1890.00","0","1890.00","2017-09-02 13:35:04");
INSERT INTO invoice_desc VALUES("251","79","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","18","pcs","200.00","3600.00","0","3600.00","2017-09-02 13:35:04");
INSERT INTO invoice_desc VALUES("252","80","400/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","1","pcs","320.00","320.00","0","320.00","2017-09-04 16:42:58");
INSERT INTO invoice_desc VALUES("253","81","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","30","pcs","200.00","6000.00","0","6000.00","2017-09-05 15:01:41");
INSERT INTO invoice_desc VALUES("254","82","1000/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","6","pcs","245.00","1470.00","0","1470.00","2017-09-05 15:18:07");
INSERT INTO invoice_desc VALUES("255","82","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","6","pcs","195.00","1170.00","0","1170.00","2017-09-05 15:18:07");
INSERT INTO invoice_desc VALUES("256","82","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","3","pcs","180.00","540.00","0","540.00","2017-09-05 15:18:07");
INSERT INTO invoice_desc VALUES("257","82","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","3","pcs","195.00","585.00","0","585.00","2017-09-05 15:18:07");
INSERT INTO invoice_desc VALUES("258","83","800/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","3","pcs","302.00","906.00","0","906.00","2017-09-06 15:36:21");
INSERT INTO invoice_desc VALUES("259","84","250/5,5VA, Cl.1.0, (ID-105mm), Tape wound C.T","6","pcs","310.00","1860.00","0","1860.00","2017-09-06 16:05:50");
INSERT INTO invoice_desc VALUES("260","85","1000/5,10VA, Cl.1.0, Rect.(65 x85mm), Tape wound C.T with connector","6","pcs","245.00","1470.00","0","1470.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("261","85","1000/5,15VA, Cl.1.0, Rect.(65 x85), Tape wound C.T with connector","2","pcs","286.00","572.00","0","572.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("262","85","160/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with conn.","3","pcs","230.00","690.00","0","690.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("263","85","200/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T with connector","12","pcs","170.00","2040.00","0","2040.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("264","85","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","3","pcs","175.00","525.00","0","525.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("265","85","100/5,2.5VA,Cl.1.0,(ID-30mm),Tape wound C.T with Conn.","39","pcs","175.00","6825.00","0","6825.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("266","85","60/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T with connector","24","pcs","190.00","4560.00","0","4560.00","2017-09-08 16:06:35");
INSERT INTO invoice_desc VALUES("267","86","600/5,5VA, Cl.1.0, (ID-90mm), Tape wound C.T with connector","9","pcs","290.00","2610.00","0","2610.00","2017-09-09 13:51:07");
INSERT INTO invoice_desc VALUES("268","87","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","4","pcs","210.00","840.00","0","840.00","2017-09-09 13:53:41");
INSERT INTO invoice_desc VALUES("269","88","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Caising","15","pcs","260.00","3900.00","0","3900.00","2017-09-09 14:50:29");
INSERT INTO invoice_desc VALUES("270","89","400/5,15VA, Cl.1.0, (ID-90mm), Tape wound C.T","3","pcs","310.00","930.00","0","930.00","2017-09-09 15:14:48");
INSERT INTO invoice_desc VALUES("271","90","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","24","pcs","156.00","3744.00","0","3744.00","2017-09-12 14:55:10");
INSERT INTO invoice_desc VALUES("272","91","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","9","pcs","156.00","1404.00","0","1404.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("273","91","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","24","pcs","200.00","4800.00","0","4800.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("274","91","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("275","91","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("276","91","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","30","pcs","143.00","4290.00","0","4290.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("277","91","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("278","91","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","15","pcs","156.00","2340.00","0","2340.00","2017-09-12 15:03:20");
INSERT INTO invoice_desc VALUES("279","92","1600/1 V>20(R+1)V, Cl.PS, (ID-110mm), Tape wound C.T with connector","3","pcs","1800.00","5400.00","0","5400.00","2017-09-12 15:26:17");
INSERT INTO invoice_desc VALUES("280","93","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","7","pcs","200.00","1400.00","0","1400.00","2017-09-12 16:32:28");
INSERT INTO invoice_desc VALUES("281","93","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","42","pcs","185.00","7770.00","0","7770.00","2017-09-12 16:32:28");
INSERT INTO invoice_desc VALUES("282","94","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-09-13 16:02:41");
INSERT INTO invoice_desc VALUES("283","95","50/5,1VA, Cl.1.0, Model (SA3R20), Nylone Caising","12","pcs","200.00","2400.00","0","2400.00","2017-09-14 12:32:38");
INSERT INTO invoice_desc VALUES("284","96","30/5(4T),2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","143.00","2145.00","0","2145.00","2017-09-14 15:41:53");
INSERT INTO invoice_desc VALUES("285","96","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","21","pcs","156.00","3276.00","0","3276.00","2017-09-14 15:41:53");
INSERT INTO invoice_desc VALUES("286","96","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","30","pcs","200.00","6000.00","0","6000.00","2017-09-14 15:41:53");
INSERT INTO invoice_desc VALUES("287","97","150/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T","3","pcs","203.00","609.00","0","609.00","2017-09-15 16:26:52");
INSERT INTO invoice_desc VALUES("288","98","100/5,2.5VA,Cl.1.0,(ID-30mm),Tape wound C.T with Conn.","3","pcs","180.00","540.00","0","540.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("289","98","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","12","pcs","180.00","2160.00","0","2160.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("290","98","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","210.00","630.00","0","630.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("291","98","1200/5,15VA, Cl.1.0, Rect.(60x40), Tape wound C.T with Connector","3","pcs","330.00","990.00","0","990.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("292","98","2000/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T with Connector","4","pcs","476.00","1904.00","0","1904.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("293","98","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","3","pcs","210.00","630.00","0","630.00","2017-09-15 16:40:41");
INSERT INTO invoice_desc VALUES("294","99","500/5,5VA, Cl.1.0, (ID-60mm), Tape wound C.T","3","pcs","180.00","540.00","0","540.00","2017-09-15 16:44:45");
INSERT INTO invoice_desc VALUES("295","100","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","1","pcs","180.00","180.00","0","180.00","2017-09-15 17:00:34");
INSERT INTO invoice_desc VALUES("296","100","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","1","pcs","180.00","180.00","0","180.00","2017-09-15 17:00:34");
INSERT INTO invoice_desc VALUES("297","101","1600/5,15VA, Cl.1.0, Rect.(170MM x 80MM), Tape wound C.T with connector","6","pcs","540.00","3240.00","0","3240.00","2017-09-16 15:06:57");
INSERT INTO invoice_desc VALUES("298","102","600/5,10VA, Cl.1.0, Rect.(60 x40), Tape wound C.T","1","pcs","250.00","250.00","0","250.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("299","102","500/5,5VA, Cl.1.0, (ID-80mm), Tape wound C.T","2","pcs","225.00","450.00","0","450.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("300","102","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","6","pcs","180.00","1080.00","0","1080.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("301","102","1200/5,15VA, Cl.1.0, Rect.(170mm x80mm), Tape wound C.T","1","pcs","430.00","430.00","0","430.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("302","102","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","1","pcs","165.00","165.00","0","165.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("303","102","200/5,5VA, Cl.1.0, Model (SA3010), Nylone Caising","3","pcs","205.00","615.00","0","615.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("304","102","50/5,1VA, Cl.1.0, Model (SA3R20), Nylone Caising","10","pcs","200.00","2000.00","0","2000.00","2017-09-16 15:26:26");
INSERT INTO invoice_desc VALUES("305","103","1000/5,7.5VA ,Cl.1.0 (ID-80mm) Tape wound C.T","1","pcs","210.00","210.00","0","210.00","2017-09-16 17:19:54");
INSERT INTO invoice_desc VALUES("306","104","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","3","pcs","180.00","540.00","0","540.00","2017-09-19 12:56:29");
INSERT INTO invoice_desc VALUES("307","104","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","1","pcs","180.00","180.00","0","180.00","2017-09-19 12:56:29");
INSERT INTO invoice_desc VALUES("308","105","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","4","pcs","195.00","780.00","0","780.00","2017-09-19 17:19:35");
INSERT INTO invoice_desc VALUES("309","106","400/5,15VA, Cl.1.0, (ID-55mm), Tape wound C.T","6","pcs","252.00","1512.00","0","1512.00","2017-09-20 13:04:06");
INSERT INTO invoice_desc VALUES("310","107","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","12","pcs","230.00","2760.00","0","2760.00","2017-09-22 11:23:27");
INSERT INTO invoice_desc VALUES("311","107","125/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","12","pcs","240.00","2880.00","0","2880.00","2017-09-22 11:23:27");
INSERT INTO invoice_desc VALUES("312","107","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","6","pcs","195.00","1170.00","0","1170.00","2017-09-22 11:23:27");
INSERT INTO invoice_desc VALUES("313","107","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","12","pcs","180.00","2160.00","0","2160.00","2017-09-22 11:23:27");
INSERT INTO invoice_desc VALUES("314","107","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T","6","pcs","230.00","1380.00","0","1380.00","2017-09-22 11:23:27");
INSERT INTO invoice_desc VALUES("315","108","3200/5,10VA, Cl.5P10, (ID-222mm), Tape wound C.T","4","pcs","1350.00","5400.00","0","5400.00","2017-09-22 12:52:51");
INSERT INTO invoice_desc VALUES("316","108","3200/5,10VA, Cl.1.0, Rect.(105MMx215MM), Tape wound C.T","3","pcs","990","2970.00","0","2970.00","2017-09-22 12:52:51");
INSERT INTO invoice_desc VALUES("317","108","1600/5,10VA, Cl.5P10, (ID-135mm), Tape wound C.T","4","pcs","840.00","3360.00","0","3360.00","2017-09-22 12:52:51");
INSERT INTO invoice_desc VALUES("318","108","1600/5,10VA, Cl.1.0, (ID-135mm), Tape wound C.T","3","pcs","450.00","1350.00","0","1350.00","2017-09-22 12:52:51");
INSERT INTO invoice_desc VALUES("319","109","250/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","12","pcs","180.00","2160.00","0","2160.00","2017-09-23 15:10:00");
INSERT INTO invoice_desc VALUES("320","110","1000/5,10VA, Cl.1.0, (ID-115mm), Tape wound C.T with connector","3","pcs","287.00","861.00","0","861.00","2017-09-25 16:23:22");
INSERT INTO invoice_desc VALUES("321","110","800/5,10VA, Cl.1.0, (ID-105mm), Tape wound C.T with connector","3","pcs","275.00","825.00","0","825.00","2017-09-25 16:23:22");
INSERT INTO invoice_desc VALUES("322","110","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T with connector","3","pcs","255.00","765.00","0","765.00","2017-09-25 16:23:22");
INSERT INTO invoice_desc VALUES("323","110","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","6","pcs","240.00","1440.00","0","1440.00","2017-09-25 16:23:22");
INSERT INTO invoice_desc VALUES("324","111","1600/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","1","pcs","406.00","406.00","0","406.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("325","111","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","3","pcs","180.00","540.00","0","540.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("326","111","1600/5,15VA, Cl.1.0, Rect.(80 x65mm), Tape wound C.T","4","pcs","425.00","1700.00","0","1700.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("327","111","1200/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T","3","pcs","330.00","990.00","0","990.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("328","111","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T","6","pcs","230.00","1380.00","0","1380.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("329","111","400/5,10VA, Cl.1.0, (ID-55MM), Tape wound C.T","5","pcs","230.00","1150.00","0","1150.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("330","111","400/5,10VA, Cl.1.0, (ID-30mm), Tape wound C.T","1","pcs","230.00","230.00","0","230.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("331","111","250/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8","pcs","180.00","1440.00","0","1440.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("332","111","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("333","111","160/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","2","pcs","225.00","450.00","0","450.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("334","111","125/5,5VA, Cl.1.0, Model (SA3R30), Nylone Casing","1","pcs","245.00","245.00","0","245.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("335","111","60/5,5VA, Cl.3.0, Model (SA3R20), Nylone Casing","2","pcs","290.00","580.00","0","580.00","2017-09-25 16:51:38");
INSERT INTO invoice_desc VALUES("336","111","800/5,15VA, Cl.1.0, Rect.(60 x40), Tape wound C.T","3","PCS","260.00","780.00","0","780.00","2017-09-25 17:02:48");
INSERT INTO invoice_desc VALUES("337","112","100/5,2.5VACl.1.0Model (SA3010) Nylone Casing","33","pcs","200.00","6600.00","0","6600.00","2017-09-26 13:37:39");
INSERT INTO invoice_desc VALUES("338","112","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","15","pcs","200.00","3000.00","0","3000.00","2017-09-26 13:37:39");
INSERT INTO invoice_desc VALUES("339","113","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","3","pcs","180.00","540.00","0","540.00","2017-09-27 12:19:27");
INSERT INTO invoice_desc VALUES("340","114","30/5,2.5VA, Cl.5.0, (ID-20mm), Tape wound C.T","9","pcs","245.00","2205.00","0","2205.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("341","114","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","9","pcs","172.50","1552.50","0","1552.50","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("342","114","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("343","114","150/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T","15","pcs","203.00","3045.00","0","3045.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("344","114","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","6","pcs","165.00","990.00","0","990.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("345","114","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","6","pcs","180.00","1080.00","0","1080.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("346","114","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","6","pcs","180.00","1080.00","0","1080.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("347","114","600/5,5VA ,Cl.1.0 (ID-65 mm) Tape wound C.T","6","pcs","195.00","1170.00","0","1170.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("348","114","800/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","9","pcs","266.00","2394.00","0","2394.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("349","114","1000/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","9","pcs","287.00","2583.00","0","2583.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("350","114","1600/5,15VA, Cl.1.0, Rect.(80 x65mm), Tape wound C.T","12","pcs","450.00","5400.00","0","5400.00","2017-09-27 14:07:27");
INSERT INTO invoice_desc VALUES("351","115","100/5,5VA, Cl.1.0, (ID-45mm), Tape wound C.T","3","pcs","320.00","960.00","0","960.00","2017-09-27 16:41:20");
INSERT INTO invoice_desc VALUES("352","116","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","3","pcs","180.00","540.00","0","540.00","2017-09-28 15:02:55");
INSERT INTO invoice_desc VALUES("361","122","400/5,15VA, Cl.0.5, (ID-65mm), Tape wound C.T","6","pcs","320.00","1920.00","0","1920.00","2017-09-28 15:46:08");
INSERT INTO invoice_desc VALUES("362","123","2000/5,15VA, Cl.1.0, (ID-130mm), Tape wound C.T","3","pcs","510.00","1530.00","0","1530.00","2017-09-29 12:15:02");
INSERT INTO invoice_desc VALUES("363","123","1600/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","3","pcs","406.00","1218.00","0","1218.00","2017-09-29 12:15:02");
INSERT INTO invoice_desc VALUES("364","123","1250/5,15VA, Cl.1.0, (ID-90mm), Tape wound C.T","4","pcs","343.00","1372.00","0","1372.00","2017-09-29 12:15:02");
INSERT INTO invoice_desc VALUES("365","123","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","7","pcs","195.00","1365.00","0","1365.00","2017-09-29 12:15:02");
INSERT INTO invoice_desc VALUES("366","124","125/5,5VA, Cl.1.0, (ID-30MM), Tape wound C.T","4","pcs","230.00","920.00","0","920.00","2017-09-29 13:00:35");
INSERT INTO invoice_desc VALUES("367","124","60/5,2.5VA, Cl.1.0, (ID-25mm), Tape wound C.T","8","pcs","260.00","2080.00","0","2080.00","2017-09-29 13:00:35");
INSERT INTO invoice_desc VALUES("368","124","40/5,2.5VA, Cl.3.0, (ID-25mm), Tape wound C.T","2","pcs","260.00","520.00","0","520.00","2017-09-29 13:00:35");
INSERT INTO invoice_desc VALUES("369","124","1250/5,10VA, Cl.1.0, Model (SA10030), Nylone Casing","4","pcs","445.00","1780.00","0","1780.00","2017-09-29 13:00:35");
INSERT INTO invoice_desc VALUES("370","125","200/5,15VA, Cl.1.0, (ID-60mm), Tape wound C.T","6","pcs","600.00","3600.00","0","3600.00","2017-09-29 13:21:19");
INSERT INTO invoice_desc VALUES("371","125","100/5,15VA, Cl.1.0, (ID-50mm), Tape wound C.T","6","pcs","950.00","5700.00","0","5700.00","2017-09-29 13:21:19");
INSERT INTO invoice_desc VALUES("372","126","60/5,1VA, Cl.1.0, Model (SA3RH20), Nylone Casing","15","pcs","205.00","3075.00","0","3075.00","2017-10-02 14:08:10");
INSERT INTO invoice_desc VALUES("373","126","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","172.50","2587.50","0","2587.50","2017-10-02 14:08:10");
INSERT INTO invoice_desc VALUES("374","127","800/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","3","pcs","290.00","870.00","0","870.00","2017-10-03 15:28:32");
INSERT INTO invoice_desc VALUES("375","128","60/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T with connector","3","pcs","195.00","585.00","0","585.00","2017-10-04 12:22:48");
INSERT INTO invoice_desc VALUES("376","128","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","7","pcs","195.00","1365.00","0","1365.00","2017-10-04 12:22:48");
INSERT INTO invoice_desc VALUES("377","128","100/5,2.5VA,Cl.1.0,(ID-30mm),Tape wound C.T with Conn.","6","pcs","180.00","1080.00","0","1080.00","2017-10-04 12:22:48");
INSERT INTO invoice_desc VALUES("378","128","800/5,5VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","3","pcs","210.00","630.00","0","630.00","2017-10-04 12:22:48");
INSERT INTO invoice_desc VALUES("379","128","2000/1,15VA, Cl.0.2, Rect.(105 x85), Tape wound C.T with connector","6","pcs","920.00","5520.00","0","5520.00","2017-10-04 12:22:48");
INSERT INTO invoice_desc VALUES("380","129","50/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T","3","pcs","880.00","2640.00","0","2640.00","2017-10-04 12:24:28");
INSERT INTO invoice_desc VALUES("381","130","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","13","pcs","200.00","2600.00","0","2600.00","2017-10-06 15:41:12");
INSERT INTO invoice_desc VALUES("382","131","600/1,5VA, Cl.0.5, (ID-80mm), Tape wound C.T with connector","3","pcs","550.00","1650.00","0","1650.00","2017-10-06 15:43:21");
INSERT INTO invoice_desc VALUES("383","132","100/5,2.5VACl.1.0Model (SA3010) Nylone Casing","15","pcs","205.00","3075.00","0","3075.00","2017-10-09 13:01:07");
INSERT INTO invoice_desc VALUES("384","132","100/5,2.5VA, Cl.1.0, (ID-45mm), Tape wound C.T","15","pcs","200.00","3000.00","0","3000.00","2017-10-09 13:01:07");
INSERT INTO invoice_desc VALUES("385","132","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T","15","pcs","172.50","2587.50","0","2587.50","2017-10-09 13:01:07");
INSERT INTO invoice_desc VALUES("386","133","60/1,15VA, Cl.1.0, WPL CT, ABS Casing","2","pcs","560.00","1120.00","0","1120.00","2017-10-09 13:58:21");
INSERT INTO invoice_desc VALUES("387","133","100/1,15VA, Cl.1.0, WPL CT, ABS Casing","2","pcs","560.00","1120.00","0","1120.00","2017-10-09 13:58:21");
INSERT INTO invoice_desc VALUES("388","134","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","3","pcs","165.00","495.00","0","495.00","2017-10-09 15:20:37");
INSERT INTO invoice_desc VALUES("389","134","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","3","pcs","165.00","495.00","0","495.00","2017-10-09 15:20:37");
INSERT INTO invoice_desc VALUES("390","135","4000/5,15VA, Cl.1.0, Rect.(135 x155MM), Tape wound C.T","7","pcs","1350.00","9450.00","0","9450.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("391","135","800/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T","3","pcs","245.00","735.00","0","735.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("392","135","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","18","pcs","180.00","3240.00","0","3240.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("393","135","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T","39","pcs","180.00","7020.00","0","7020.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("394","135","125/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","42","pcs","240.00","10080.00","0","10080.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("395","135","160/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","12","pcs","220.00","2640.00","0","2640.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("396","135","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","6","pcs","180.00","1080.00","0","1080.00","2017-10-10 14:32:32");
INSERT INTO invoice_desc VALUES("397","136","1200/5,15VA, Cl.1.0, Rect.(60x40), Tape wound C.T with Connector","3","pcs","330.00","990.00","0","990.00","2017-10-10 14:38:29");
INSERT INTO invoice_desc VALUES("398","136","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","18","pcs","180.00","3240.00","0","3240.00","2017-10-10 14:38:29");
INSERT INTO invoice_desc VALUES("399","136","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","12","pcs","195.00","2340.00","0","2340.00","2017-10-10 14:38:29");
INSERT INTO invoice_desc VALUES("400","136","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","18","pcs","210.00","3780.00","0","3780.00","2017-10-10 14:38:29");
INSERT INTO invoice_desc VALUES("401","137","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","3","pcs","205.00","615.00","0","615.00","2017-10-12 11:59:36");
INSERT INTO invoice_desc VALUES("402","138","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T","72","pcs","143.00","10296.00","0","10296.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("403","138","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","48","pcs","143.00","6864.00","0","6864.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("404","138","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T","72","pcs","143.00","10296.00","0","10296.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("405","138","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","24","pcs","156.00","3744.00","0","3744.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("406","138","400/5,5VACl.1.0(ID-60mm) Tape wound C.T","24","pcs","156.00","3744.00","0","3744.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("407","138","500/5,5VA, Cl.1.0, (ID-60mm), Tape wound C.T","12","pcs","156.00","1872.00","0","1872.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("408","138","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T","24","pcs","156.00","3744.00","0","3744.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("409","138","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T","18","pcs","169.00","3042.00","0","3042.00","2017-10-12 12:35:51");
INSERT INTO invoice_desc VALUES("410","139","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","3","pcs","205.00","615.00","0","615.00","2017-10-15 22:48:45");
INSERT INTO invoice_desc VALUES("411","139","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Casing","6","pcs","250.00","1500.00","0","1500.00","2017-10-15 22:48:45");
INSERT INTO invoice_desc VALUES("412","140","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","3","pcs","205.00","615.00","0","615.00","2017-10-15 22:49:49");
INSERT INTO invoice_desc VALUES("413","140","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Casing","6","pcs","250.00","1500.00","0","1500.00","2017-10-15 22:49:49");
INSERT INTO invoice_desc VALUES("414","141","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","3","pcs","205.00","615.00","0","615.00","2017-10-15 22:52:43");
INSERT INTO invoice_desc VALUES("415","141","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Casing","6","pcs","250.00","1500.00","0","1500.00","2017-10-15 22:52:43");





CREATE TABLE `item_detail` (
  `p_sno` int(9) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_hsn` varchar(40) NOT NULL,
  `p_taxrate` int(5) NOT NULL,
  PRIMARY KEY (`p_sno`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

INSERT INTO item_detail VALUES("9","P-4","250/5, 5 VA Cl. 1.0 Model (SA3010) Nylone Casing  ","8504","18");
INSERT INTO item_detail VALUES("6","SA-01","1000/5, 5VA, CL. 1.0 (Id-30mm) Tape Wound C.T ","8504","18");
INSERT INTO item_detail VALUES("7","SA-12","2000/5,5VA1.0 (30mm) Tape Wound C.T ","8504","18");
INSERT INTO item_detail VALUES("8","222","600/5,5VA, Cl.1.0 Model (SA8015) Nylone Casing ","8504","18");
INSERT INTO item_detail VALUES("10","SA-600","600/5 ,5VACl.0.5(ID-80mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("11","SA-300","300/5,5VACl.0.5(ID-55 mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("12","SA-800","800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("13","SA-400","400/5,5VACl.1.0(ID-60mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("14","pl-100","100/5,2.5VACl.1.0Model (SA3010) Nylone Casing ","8504","18");
INSERT INTO item_detail VALUES("15","pl-150","150/5,2.5VACl.1.0Model (SA3010) Nylone Casing ","8504","18");
INSERT INTO item_detail VALUES("16","PL-250","250/5,5VACl.1.0Model (SA3010) Nylone Casing  ","8504","18");
INSERT INTO item_detail VALUES("17","pl-800","800/5,5VACl.1.0Model (SA8015) Nylone Casing ","8504","18");
INSERT INTO item_detail VALUES("18","SA-400","400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("19","SA-5000","5000/5,15VACl.0.5(ID-270mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("20","SA-250","250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("21","SA-600","600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("22","Rec-3000","3000/5,15VA Cl.1.0,Rect.(150 x75) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("23","Rec-1250","1250/5,15VA,Cl.1.0, Rect.(60 x 40) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("24","Rou-250","250/5,15VA, Cl.1.0, (ID-45mm) Tape wound C.T  ","8504","18");
INSERT INTO item_detail VALUES("25","Rou-600","600/5,5VA ,Cl.1.0 (ID-65 mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("26","Rou-100","100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("27","Rou-200","200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("28","Rou-60","60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("29","Rou-250","250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T  ","8504","18");
INSERT INTO item_detail VALUES("30","Rou-600","600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("31","Rou-1000","1000/5,7.5VA ,Cl.1.0 (ID-80mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("32","Rou-2000","2000/5,15VA ,Cl.1.0 (ID-115mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("33","Pl-1000","1000/5,10VA ,Cl.1.0 Model (SA8015) Nylone Casing ","8504","18");
INSERT INTO item_detail VALUES("34","Rou-800","800/5,10VA ,Cl.1.0 (ID-60mm) Tape wound C.T  with connector","8504","18");
INSERT INTO item_detail VALUES("35","Rec-2500","2500/5,15VA ,Cl.1.0 Rect.(130 x60) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("36","Rou-50","50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("37","Rou-100/5","100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T ","8504","18");
INSERT INTO item_detail VALUES("38","Rou-125","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("39","Rou-150","150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("40","Rou-60/1","60/1,2.5VA, Cl.1.0, (ID-20mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("41","Rou-80/1","80/1,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("42","Rec-1600","1600/5,15VA, Cl.1.0, Rect.(65 x90), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("43","Rou-600","600/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("44","Rec-2500","2500/5,15VA, Cl.1.0, Rect.(175 x90), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("45","rec-1250/5","1250/5,15VA, Cl.1.0, Rect.(80x65mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("46","Rec-1600/5","1600/5,15VA, Cl.1.0, Rect.(80 x65mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("47","Rec-1600","1600/5,15VA, Cl.1.0, Rect.(150 x70MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("48","REC-2000","2000/5,15VA, Cl.1.0, Rect.(150 x70MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("49","pl-200/5","200/5,5VA, Cl.1.0, Model (SA3010), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("50","Pl-1000","1000/5,7.5VA, Cl.1.0, Model (SA8015), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("51","PL-1200","1200/5,15VA, Cl.1.0, Model (SA10030), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("52","Rou-250","250/5,5VA, Cl.1.0, (ID-50mm) with connector, Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("53","Rou-300","300/5,5VA, Cl.1.0, (ID-50mm) Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("54","Rou-500","500/5,5VA, Cl.1.0, (ID-60mm) with connector, Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("55","Rou-150","150/5,2.5VA, Cl.1.0, (ID-30mm) , Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("56","Rou-400","400/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("57","Rou-100","100/5,2.5VA,Cl.1.0,(ID-30mm),Tape wound C.T with Conn.","8504","18");
INSERT INTO item_detail VALUES("58","Rou-1000/5","1000/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("59","Rou-1200","1200/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("60","Rou-100/5","100/5,2.5VA, Cl.1.0, (ID-45mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("61","Rou-300","300/5,5VA, Cl.1.0, (ID-50mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("62","Rou-160","160/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("63","Rec-3200/5","3200/5,15VA, Cl.1.0, Rect.(150 x80MM), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("64","Rou-2500/5","2500/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("65","Rou-1000/5","1000/5, 5VA, Cl.1.0, (ID-90mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("66","Rou-1000/5","1000/5,10VA, Cl.1.0, (ID-105mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("67","Rou-125/5","125/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("68","Rou-250/5","250/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("69","Rou-25/5","25/5,2.5VA, Cl.5.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("70","Rou-30/5(4","30/5(4T),2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("71","Rou-160/5","160/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("72","Rec-1666","1666/5,15VA, Cl.1.0, Rect.(140x80MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("73","ROU-800/5","800/5,5VA, Cl.1.0, (ID-60mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("74","rec-1200/5","1200/5,15VA, Cl.1.0, Rect.(60x40), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("75","Rou-1200","1200/5,15VA, Cl.5P10, (ID-80mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("76","pl-60","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("77","pl-40","40/5(2T),2.5VA, Cl.1.0, Model (SA3R20), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("78","pl-50","50/5,1VA, Cl.1.0, Model (SA3R20), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("79","Rou-600","600/5,10VA, Cl.1.0, (ID-50MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("80","Rou-400","400/5,10VA, Cl.1.0, (ID-55MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("81","Rou-125/5","125/5,5VA, Cl.1.0, (ID-30MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("82","Rou-160/5","160/5,5VA, Cl.1.0, (ID-30MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("83","Rou-100/5","100/5,5VA, Cl.1.0, Model (SA3012), Nylone Caising","8504","18");
INSERT INTO item_detail VALUES("84","Rou-200/5","200/5,10VA, Cl.1.0, (ID-55MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("85","Rou-30/5","30/5,2.5VA, Cl.5.0, (ID-20MM), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("86","Rou-1000/5","1000/5,7.5VA, Cl.1.0, (ID-80MM), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("87","Rou-1000/5","1000/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("88","Rou-1250/5","1250/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("89","Rou-400/5","400/5,10VA, Cl.1.0, (ID-55mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("90","Rou-600/5","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("91","Rou-250/5","250/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("92","Rou-160/5","160/5,10VA, Cl.1.0, (ID-35mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("93","Rou-60/5","60/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("94","Rou-125/5","125/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("95","Rou-30/5","30/5,2.5VA, Cl.5.0, (ID-20mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("96","Rou-75/5","75/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("97","Rec-2500/5","2500/5,15VA, Cl.1.0, Rect.(105 x80), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("98","rec-1200/5","1200/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("99","rec-800/5","800/5,15VA, Cl.1.0, Rect.(60 x40), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("100","Rou-400","400/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("101","Rou-300/5","300/5,10VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("102","Rou-200/5","200/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("103","pl-150","150/5,5VA, Cl.1.0, Model (SA3012), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("104","Rec-2000/5","2000/5,15VA, Cl.1.0, Rect.(110 x80), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("105","ROU-60/5","60/5,5VA, Cl.3.0, (ID-30mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("106","Rou-200/5","200/5,5VA, Cl.1.0, (ID-45mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("107","Rou-1200/5","1200/5,15VA, Cl.1.0, (ID-115mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("108","Rou-1600/5","1600/5,15VA, Cl.1.0, (ID-150mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("109","NY-800/1","800/1,10VA, Cl.0.2, Model (SA8015), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("110","Rou-600/5","600/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("111","Rou-800/5","800/5,15VA, Cl.0.5, (ID-80mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("112","Rou-400/5","400/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("113","Rou-500/5","500/5,5VA, Cl.0.5, (ID-60mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("114","Rou-125/5","125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("115","Rou-50/5","50/5,2.5VA, Cl.0.5, (4 w), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("116","Rou-1200/5","1200/5,15VA,Cl.1.0,(ID-115mm),Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("117","Rou-2000/5","2000/5,15VA,Cl.1.0,(ID-115mm),Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("118","Rou-1000/1","1000/1,15VA,Cl.1.0,(ID-80mm),Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("119","Rou-1600/1","1600/1,15VA, Cl.1.0, (ID-115mm), Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("120","Rec-400/1","400/1,15VA,Cl.1.0,Rect.(60 x40),Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("121","Rou-800/1","800/1,15VA, Cl.1.0,(ID-80MM),Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("122","Rec-4000/5","4000/5,15VA,Cl.1.0,Rect.(175x80MM),Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("123","Rou-60/5","60/5,2.5VA, Cl.3.0, (ID-30mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("124","Rou-600/5","600/5,5VA, Cl.1.0, (ID-65mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("125","Rou-400/5","400/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("126","Rou-160/5","160/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T with conn.","8504","18");
INSERT INTO item_detail VALUES("127","Rou-800/5","800/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("128","Rou-250/5","250/5,5VA, Cl.1.0, (ID-105mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("129","Rec-1000/5","1000/5,10VA, Cl.1.0, Rect.(65 x85mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("130","Rou-1000/5","1000/5,15VA, Cl.1.0, Rect.(65 x85), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("131","Rou-200/5","200/5,2.5VA, Cl.1.0, (ID-35mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("132","Rou-600/5","600/5,5VA, Cl.1.0, (ID-90mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("133","Rou-400/5","400/5,15VA, Cl.1.0, (ID-90mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("134","Rou-1600/1","1600/1 V>20(R+1)V, Cl.PS, (ID-110mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("135","Rou-150/5","150/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("136","Rec-2000/5","2000/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T with Connector","8504","18");
INSERT INTO item_detail VALUES("137","Rou-500/5","500/5,5VA, Cl.1.0, (ID-60mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("138","Rou-1600/5","1600/5,15VA, Cl.1.0, Rect.(170MM x 80MM), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("139","Rec-600/5","600/5,10VA, Cl.1.0, Rect.(60 x40), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("140","Rou-500/5","500/5,5VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("141","Rec-1200/5","1200/5,15VA, Cl.1.0, Rect.(170mm x80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("142","Rou-400/5","400/5,15VA, Cl.1.0, (ID-55mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("143","Rou-1600/5","1600/5,10VA, Cl.1.0, (ID-135mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("144","Rec-3200/5","3200/5,10VA, Cl.1.0, Rect.(105MMx215MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("145","Rou-1600/5","1600/5,10VA, Cl.5P10, (ID-135mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("146","Rou-3200/5","3200/5,10VA, Cl.5P10, (ID-222mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("147","Rou-600/5","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("148","Rou-125/5","125/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("149","ROU-1000/5","1000/5,10VA, Cl.1.0, (ID-115mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("150","Rou-800/5","800/5,10VA, Cl.1.0, (ID-105mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("151","Rou-600/5","600/5,10VA, Cl.1.0, (ID-60mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("152","Rec-1200/5","1200/5,15VA, Cl.1.0, Rect.(80 x60), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("153","Rec-800/5","800/5,15VA, Cl.1.0, Rect.(60 x40), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("154","Rou-400/5","400/5,10VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("155","NY-125/5","125/5,5VA, Cl.1.0, Model (SA3R30), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("156","NY-60/5","60/5,5VA, Cl.3.0, Model (SA3R20), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("157","Rou-1600/5","1600/5,15VA, Cl.1.0, (ID-105mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("158","Rou-160/5","160/5,5VA, Cl.1.0, (ID-35mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("159","Rou-800/5","800/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("160","Rou-1000/5","1000/5,15VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("161","Rou-100/5","100/5,5VA, Cl.1.0, (ID-45mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("162","Rou-400/5","400/5,15VA, Cl.0.5, (ID-65mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("163","Rou-2000/5","2000/5,15VA, Cl.1.0, (ID-130mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("164","Rou-1250/5","1250/5,15VA, Cl.1.0, (ID-90mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("165","NY-1250/5","1250/5,10VA, Cl.1.0, Model (SA10030), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("166","Rou-60/5","60/5,2.5VA, Cl.1.0, (ID-25mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("167","Rou-40/5","40/5,2.5VA, Cl.3.0, (ID-25mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("169","Rou-200/5","200/5,15VA, Cl.1.0, (ID-60mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("170","Rou-100/5","100/5,15VA, Cl.1.0, (ID-50mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("171","NY-60/5","60/5,1VA, Cl.1.0, Model (SA3RH20), Nylone Casing","8504","18");
INSERT INTO item_detail VALUES("172","Rou-800/5","800/5,5VA, Cl.1.0, (ID-80mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("173","Rec-2000/1","2000/1,15VA, Cl.0.2, Rect.(105 x85), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("174","Rou-50/5","50/5,5VA, Cl.1.0, (ID-30mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("175","Rou-600/1","600/1,5VA, Cl.0.5, (ID-80mm), Tape wound C.T with connector","8504","18");
INSERT INTO item_detail VALUES("176","Rou-20/5 (","20/5(3T),1VA, Cl.1.0, Model (SA3R20), Nylon Casing","8504","18");
INSERT INTO item_detail VALUES("177","WPL-001","60/1,15VA, Cl.1.0, WPL CT, ABS Casing","8504","18");
INSERT INTO item_detail VALUES("178","WPL-100/1","100/1,15VA, Cl.1.0, WPL CT, ABS Casing","8504","18");
INSERT INTO item_detail VALUES("179","Rec-4000/5","4000/5,15VA, Cl.1.0, Rect.(135 x155MM), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("180","Rou-800/5","800/5,10VA, Cl.1.0, (ID-80mm), Tape wound C.T","8504","18");
INSERT INTO item_detail VALUES("181","NYL-800/5","800/5,15VA, Cl.1.0, Model (SA10030), Nylone Casing","8504","18");





CREATE TABLE `state` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `state_code` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO state VALUES("1","24","GUJARAT");
INSERT INTO state VALUES("2","26","DADRA & NAGAR HAVELI");
INSERT INTO state VALUES("3","25","DAMAN & DIU");
INSERT INTO state VALUES("4","27","MAHARASHTRA");



