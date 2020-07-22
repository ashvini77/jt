package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.LimitedSeatsEventPage;
import com.jticketing.testbase.TestBase;

public class LimitedSeatsEventPageTest extends TestBase{

	@Test(dataProvider = "limitedseatsevent", dataProviderClass = DataProviderClass.class)
	
	public void CreateEventWithLimitedSeats(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription,
			String firstticketprice, String firstticketenddate, String seatscount, String firstattendeefieldtitle, Method method) throws InterruptedException {
		
		logger = extent.createTest(method.getName().toString());
		LimitedSeatsEventPage event = new LimitedSeatsEventPage(driver);
		
		event.CreateEventWithLimitedSeats(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketdescription, firstticketprice, firstticketenddate, seatscount, firstattendeefieldtitle);
		
	}
	
}
