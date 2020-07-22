package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.UnlimitedSeatsEventPage;
import com.jticketing.testbase.TestBase;

public class UnlimitedSeatsEventPageTest extends TestBase{
	
	@Test(dataProvider = "unlimitedseatsevent", dataProviderClass = DataProviderClass.class)
	
	public void CreateEventWithUnlimitedSeats(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription,
			String firstticketprice, String firstticketenddate, String firstattendeefieldtitle, Method method) throws InterruptedException {
		
		logger = extent.createTest(method.getName().toString());
		UnlimitedSeatsEventPage event = new UnlimitedSeatsEventPage(driver);
		
		event.CreateEventWithUnlimitedSeats(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketdescription, firstticketprice, firstticketenddate, firstattendeefieldtitle);
		
	}

}
