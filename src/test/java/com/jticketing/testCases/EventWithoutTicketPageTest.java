package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.EventWithoutTicketPage;
import com.jticketing.testbase.TestBase;

public class EventWithoutTicketPageTest extends TestBase{
	
@Test(dataProvider = "eventwithoutticket", dataProviderClass = DataProviderClass.class)
	
	public void eventwithouttickettype(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		EventWithoutTicketPage event = new EventWithoutTicketPage(driver);
	
		event.CreateEventWithoutTicketType(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firstattendeefieldtitle);

	}

}
