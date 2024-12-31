function calculateMonthlyRevenue(subscribers, subscriptionFee) {
	// Assuming all subscribers pay the same subscription fee
	var monthlyRevenue = subscribers * subscriptionFee;
	return monthlyRevenue;
}
