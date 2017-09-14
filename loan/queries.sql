--loanapply table creation
CREATE TABLE loanapply(
    country varchar(40),
    le_book varchar(3),
    year_month int,
    customer_gender varchar(4),
    vision_ouc varchar(20),
    loan_utilization_location varchar(40),
    vision_sbu varchar(40),
    economic_sector_code varchar(10),
    total_applied_loan int,
    total_applied_amount_lcy int,
    total_approved_loan int,
    total_approved_amount_lcy int,
    total_rejected_loan int,
    total_rejected_amount_lcy int,
    total_outstanding_loan int,
    total_outstanding_amount_lcy int,
    total_npl_loan int,
    total_npl_amount_lcy int,
    total_writeoff_loan int,
    total_writeoff_amount_lcy int,
    rejection_reason varchar(100),
    feed_date varchar(20),
    feed_status varchar(10)

);

