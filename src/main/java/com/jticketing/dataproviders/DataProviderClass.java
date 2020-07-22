package com.jticketing.dataproviders;

import java.io.IOException;

import org.testng.annotations.DataProvider;

import com.jticketing.utility.ExcelUtils;

public class DataProviderClass {

	public static final String TESTDATAEXCELFILE = "testData.xlsx";
	
	@DataProvider(name = "adminlogin")
	public static Object[][] adminlogin() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "adminLogin");
	}
	
	@DataProvider(name = "admineventcreation")
	public static Object[][] eventcreation() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "admineventcreation");
	}
	
	@DataProvider(name = "createofflineevent")
	public static Object[][] offlineeventcreation() throws IOException {
    return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "createofflineevent");
	}
	
	@DataProvider(name = "tickettypeevent")
	public static Object[][] eventwithtickettype() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "tickettypeevent");
	}
	
	@DataProvider(name = "eventwithoutticket")
	public static Object[][] eventwithoutticket() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventwithoutticket");
	}
	
	@DataProvider(name = "zeroticketpriceevent")
	public static Object[][] zeroticketpriceevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "zeroticketpriceevent");
	}
	
	@DataProvider(name = "unlimitedseatsevent")
	public static Object[][] unlimitedseatsevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "unlimitedseatsevent");
	}

	@DataProvider(name = "limitedseatsevent")
	public static Object[][] limitedseatsevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "limitedseatsevent");
	}
	
	@DataProvider(name = "publishedevent")
	public static Object[][] publishedevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "publishedevent");
	}
	
	@DataProvider(name = "unpublishedevent")
	public static Object[][] unpublishedevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "unpublishedevent");
	}
	
	@DataProvider(name = "eventwitheventimage")
	public static Object[][] eventwitheventimage() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventwitheventimage");
	}
	
	@DataProvider(name = "eventmorethanoneticket")
	public static Object[][] eventmorethanoneticket() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventmorethanoneticket");
	}
	
	@DataProvider(name = "eventmorethanoneattendee")
	public static Object[][] eventmorethanoneattendee() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventmorethanoneattendee");
	}
	
	@DataProvider(name = "eventattendeefieldrequired")
	public static Object[][] eventattendeefieldrequired() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventattendeefieldrequired");
	}
	
	@DataProvider(name = "eventattendeefieldnotrequired")
	public static Object[][] eventattendeefieldnotrequired() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventattendeefieldnotrequired");
	}
	
	@DataProvider(name = "allowseeeventattendee")
	public static Object[][] allowseeeventattendee() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "allowseeeventattendee");
	}
	
	@DataProvider(name = "denyseeeventttendee")
	public static Object[][] denyseeeventttendee() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "denyseeeventttendee");
	}
	
	@DataProvider(name = "ticket&bookingdatecombinations")
	public static Object[][] ticketandbookingdatecombinations() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "ticket&bookingdatecombinations");
	}
	
	@DataProvider(name = "booking&eventdatecombinations")
	public static Object[][] bookingandeventdatecombinations() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "booking&eventdatecombinations");
	}
	
	@DataProvider(name = "pastdateandtimeevent")
	public static Object[][] pastdateandtimeevent() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "pastdateandtimeevent");
	
	}
	
	@DataProvider(name = "eventattendeefieldtypes")
	public static Object[][] eventattendeefieldtypes() throws IOException {
	return ExcelUtils.getExcelData(TESTDATAEXCELFILE, "eventattendeefieldtypes");
	
	}
	
}
