package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class TicketTypeEventPage extends TestBase{
	
	
	public TicketTypeEventPage(WebDriver driver) {
		super();
	}
	
	CreateEventPage event = new CreateEventPage(driver);

	public void CreateEventWithTicketType(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription,
			String firstticketprice, String firstticketenddate, String firstattendeefieldtitle) throws InterruptedException {
		
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
	    EnterValue(event.ChooseEventImage, eventimage);
	    EnterValueInIframe(event.EventDescription, eventdescription);
	    ScrollDown2();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
		EnterValue(event.FirstTicketDescription, firstticketdescription);
	    SelectDropdownValue(event.FirstTicketStatus, event.FirstTicketStatusPublish);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
	    SelectDropdownValue(event.FirstTicketSeatsAvailability, event.FirstTicketLimitedSeats);
	    ScrollDown3();
	    SelectDropdownValue(event.FirstTicketAccess, event.FirstTicketAccessRegistered);
	    ScrollUp2();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeText);
		ScrollDown4();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with ticket type");
}


}
