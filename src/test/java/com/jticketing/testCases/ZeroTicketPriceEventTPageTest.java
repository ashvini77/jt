package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.ZeroTicketPriceEventPage;
import com.jticketing.testbase.TestBase;

public class ZeroTicketPriceEventTPageTest extends TestBase{

	@Test(dataProvider = "zeroticketpriceevent", dataProviderClass = DataProviderClass.class)
		
	public void zeroticketpriceevent(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription,
			String firstticketprice, String firstticketenddate, String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		ZeroTicketPriceEventPage event = new ZeroTicketPriceEventPage(driver);
	
		event.CreateEventWithZeroTicketPrice(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketdescription, firstticketprice, firstticketenddate, firstattendeefieldtitle);

	}
	
}
