package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.TicketTypeEventPage;
import com.jticketing.testbase.TestBase;

public class TicketTypeEventPageTest extends TestBase {

	@Test(dataProvider = "tickettypeevent", dataProviderClass = DataProviderClass.class)
	
	public void eventwithtickettype(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription,
			String firstticketprice, String firstticketenddate, String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		TicketTypeEventPage event = new TicketTypeEventPage(driver);
	
		event.CreateEventWithTicketType(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketdescription, firstticketprice, firstticketenddate, firstattendeefieldtitle);

	}
}
	
