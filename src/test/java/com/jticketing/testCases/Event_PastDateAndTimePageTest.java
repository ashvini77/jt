package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_PastDateAndTimePage;
import com.jticketing.testbase.TestBase;

public class Event_PastDateAndTimePageTest extends TestBase{
	
	@Test(dataProvider = "pastdateandtimeevent", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,String bookingstartdate, String bookingenddate, Method method) throws InterruptedException {
	
		logger = extent.createTest(method.getName().toString());
		
		Event_PastDateAndTimePage event = new Event_PastDateAndTimePage();
		
		event.CreateEventWithPastDateAndTime(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate);
		
	}
	
	

}
