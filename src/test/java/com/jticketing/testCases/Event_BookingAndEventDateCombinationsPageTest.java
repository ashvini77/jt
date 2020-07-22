package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_BookingAndEventDateCombinationsPage;
import com.jticketing.testbase.TestBase;

public class Event_BookingAndEventDateCombinationsPageTest extends TestBase{

@Test(dataProvider = "booking&eventdatecombinations", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String testdesc, String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_BookingAndEventDateCombinationsPage event = new Event_BookingAndEventDateCombinationsPage();
		
		if(testdesc.equals("Event18")) {
			
			event.CreateEventWithBookingStartDateIsGreatorThanEventStartDate(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
			
		}
		
        if(testdesc.equals("Event19")) {
			
			event.CreateEventWithBookingStartDateIsLessThanEventStartDate(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
		}
   }
	
}
