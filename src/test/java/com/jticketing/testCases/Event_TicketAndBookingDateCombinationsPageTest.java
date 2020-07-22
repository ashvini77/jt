package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_TicketAndBookingDateCombinationsPage;
import com.jticketing.testbase.TestBase;

public class Event_TicketAndBookingDateCombinationsPageTest extends TestBase{

@Test(dataProvider = "ticket&bookingdatecombinations", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String testdesc, String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_TicketAndBookingDateCombinationsPage event = new Event_TicketAndBookingDateCombinationsPage();
		
		if(testdesc.equals("invalid")) {
			
			event.CreateEventWithTicketEndDateIsLessThanBookingStartDate(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
			
		}
		
		if(testdesc.equals("valid")) {
			
			event.CreateEventWithTicketEndDateIsGreaterThanBookingStartDate(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
		}
	    
	}
	
}
