package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class OfflineEventPage extends TestBase {

	public OfflineEventPage(WebDriver driver) {
		super();
	}
	
	CreateEventPage event = new CreateEventPage(driver);
	
	public void CreateOfflineEvent(String eventtitle, String eventstartdate, String eventenddate,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, 
			String firstticketenddate, String firstattendeefieldtitle) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		event.SelectCreator();
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ButtonClick(event.DetailInfo);
		ScrollDown1();
		EnterValueInIframe(event.EventDescription, eventdescription);
		ScrollDown2();
		ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
		ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
		ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
		ScrollUp2();
		ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeText);
		ScrollDown3();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ButtonClick(event.SaveandClose);
		logger.pass("Offline event has created successfully");
	}
	
}
